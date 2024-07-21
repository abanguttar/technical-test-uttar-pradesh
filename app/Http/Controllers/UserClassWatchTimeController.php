<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserClassWatchTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class UserClassWatchTimeController extends Controller
{
    public function updateWatchTime(Request $request)
    {
        $user_id = $request->user_id;
        $class_id = $request->class_id;
        $date = Carbon::now();
        $month = $date->format('m');
        $year = $date->format('Y');

        /**
         * Karena ada pengumpulan data perbulan/monthly maka saya menggunakan month secara terpisah dengan integer
         * tujuannya agar saat collecting data bisa dilakukan dengan mudah 
         * dan memisahkan user yang sama menonton video yang sama dibulan yang berbeda (repeat video beda bulan maka menghasilkan perhitungan/count view yang berbeda)
         */

        /**
         * Cek apakah data sudah exist? jika ada lakukan update, jika null maka lakukan insert
         */
        $key = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year;
        $key_inc = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year . 'increment'; //increment key

        /**
         * Disini logic yang saya buat adalah menghilangkan request berulang ke database, karena update yang dilakukan 
         * sangat sering maka saya menggunakan Cache.
         * 
         * Alurnya adalah untuk user, class, month date yang datanya null didatabase, maka saya beri flag is null
         * Default $is_null adalah false (karena data tidak exist).
         * Karena False maka ia akan diarahkan untuk insert database, setelah insert ubah data $is_null yang tadinya false menjadi true karena baru saja terjadi insert
         * Dan tambahannya adalah masukkan value cache baru yang bernilai 1 dengan key $key_inc untuk digunakan secara lanjut guna proses increment
         * dan bisa menghindari request berulang langsung ke database, dengan itu menurut saya kinerja aplikasi akan lebih efisien 
         */

        $is_null = Cache::remember($key, Carbon::now()->addDays(1), function () use ($user_id, $class_id, $month, $year) {
            Log::info("is null empty call database");
            $value = UserClassWatchTime::where('user_id', $user_id)->where('class_id', $class_id)
                ->where('month', $month)->where('year', $year)
                ->exists();
            return $value;
        });

        /**
         * Disini saya berasumsi jika update data waktu tonton adalah berdasarkan menit video ditonton akan call api untuk 
         * insert atau update value. Untuk proses yang intens saya menggunakan store procedure, agar di eksekusi di server dan user hanya perlu call saja 
         * dan kecil resiko gagal update atau insert
         */
        if (!$is_null) {
            DB::statement("CALL insert_watch_time(?,?,?,?,NOW())", [
                $user_id,
                $class_id,
                $month,
                $year
            ]);
            Cache::put($key, true, Carbon::now()->addDays(1));
            Cache::put($key_inc, 1, Carbon::now()->addDays(1));
            return response()->json([
                'success' => true,
                'message' => 'ok'
            ], 201);
        }


        /**
         * Karena ada potensi banyaknya value cache maka cache saya buat expired selama satu hari
         * Jika $increment null maka dia akan call database untuk mengambil nilai watch minutes terbaru
         */

        $increment = Cache::remember($key_inc, Carbon::now()->addDays(1), function () use ($user_id, $class_id, $month, $year) {
            Log::info("increment empty call database");
            $d = UserClassWatchTime::where('user_id', $user_id)->where('class_id', $class_id)
                ->where('month', $month)->where('year', $year)
                ->first();
            return (int) $d->watch_minutes;
        });

        $watch_time =  $increment + 1;
        DB::statement('CALL update_watch_time(?,?,?,NOW())', [
            $user_id,
            $class_id,
            $watch_time
        ]);
        Cache::increment($key_inc);
        return response()->json([
            'success' => true,
            'message' => 'ok'
        ], 200);
    }
}
