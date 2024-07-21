<?php

namespace App\Http\Controllers;

use stdClass;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Helpers\IncomeHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MentorIncomeController extends Controller
{


    public function showIncome(Request $request)
    {
        $month_request = $request->month ?? '2024-7'; // Example month it can replace by request query search
        $date_explode = explode('-', $month_request);
        $month = $date_explode[1];
        $year = $date_explode[0]; // Example year it can replace by request query search
        $date = Carbon::createFromDate($year, $month, null);
        $month_text = $date->format('Y-m');
        $month_date = $date->format('Y-m-d');

        $data_object = new stdClass();
        $data_object->periode = $month_text;

        // Fetching classes and watch times
        $data = DB::table('classes as c')
            ->leftJoin('user_class_watch_times as ucwt', 'c.id', '=', 'ucwt.class_id')
            ->leftJoin('mentors as m', 'c.mentor_id', '=', 'm.id') // Join mentors table to get mentor name
            ->select(
                'c.*',
                'm.name as mentor_name',
                DB::raw('SUM(ucwt.watch_minutes) as watch_count')
            )
            ->addSelect(DB::raw('(SELECT SUM(ucw.watch_minutes) FROM user_class_watch_times as ucw WHERE ucw.month = ' . $month . ' AND ucw.year = ' . $year . ') as total_watch_month'))
            ->where('ucwt.month', $month)
            ->where('ucwt.year', $year)
            ->groupBy('c.id', 'm.name', 'c.title', 'c.description', 'c.created_at', 'c.updated_at', 'm.id')
            ->get();


        /** 
         * Ambil revenue dari jumlah user subscriptions dengan catatan user subscriptions yang masih aktif 
         * dengan kondisi masa berakhir masih lebih besar dibanding month selected 
         */
        $pakets = DB::table('pakets as p')->leftJoin('user_subscriptions as us', 'p.id', '=', 'us.paket_id')
            ->select('p.*', DB::raw('COUNT(us.id) *p.price as revenue'))
            ->where('us.end_date', '<=', $month_date)
            ->groupBy('p.id', 'p.price', 'us.end_date')
            ->pluck('revenue')->toArray();

        $revenue = array_sum($pakets); // sum revenue
        Log::info("revenue", ['revenue' => $revenue]);

        /**
         * Tulis fungsi untuk menghitung hasil bersih setelah pemotongan biaya.
         */
        $net_income = IncomeHelper::calculateTotalNetIncome($revenue, 20); // get net income
        $mentors = [];
        foreach ($data as $d) {
            /**
             * Tulis fungsi untuk menghitung persentase waktu tonton dan hasil yang harusdibagikan kepada setiap mentor.
             */
            $calculate = IncomeHelper::calculatePercentageAndIncome($d->watch_count, $d->total_watch_month, $net_income);
            $dok =  (object)[
                'class_name' => $d->title,
                'class_percentage' => $calculate->percentage
            ];


            /**
             * Disini saya kelompokkan berdasarkan mentor
             * Dan mengelompokkan kelas mentor yang memiliki persentase ditonton
             */
            if (isset($mentors[$d->mentor_name])) {
                $mentors[$d->mentor_name]->percentage += $calculate->percentage;
                $mentors[$d->mentor_name]->income += $calculate->income;
                array_push($mentors[$d->mentor_name]->class, $dok);
            } else {
                //data object kelas
                $mentors[$d->mentor_name] = (object) [
                    'mentor_name' => $d->mentor_name,
                    'percentage' => $calculate->percentage, //waktu tonton dalam persentase
                    'income' => $calculate->income,
                    'class' => [$dok]
                ];
            }
        }

        $data_object->revenue = $revenue;
        $data_object->net_income = $net_income;


        /**
         * Jika data kosong kembalikan dengan response 400 atau not found
         */
        if (count($mentors) === 0) {
            return response()->json(['success' => false, 'message' => 'data tidak ditemukan'], 400);
        }
        $data_object->data = array_values($mentors); //Reset array keys
        return response()->json([
            'success' => true,
            'message' => 'ok',
            'data' => $data_object
        ], 200);
    }
}
