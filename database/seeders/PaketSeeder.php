<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Paket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['paket 1', 69000, 30],
            ['paket 2', 50000, 30],
            ['paket 3', 50000, 30],
        ];
        foreach ($array as $key => $value) {
            Paket::create([
                'name' => $value[0],
                'price' => $value[1],
                'durations_in_days' => $value[2],
            ]);
        }


        // $class = range(1, 3);
        // foreach ($class as $key => $value) {
        //     DB::table('paket_class')->insert([
        //         'paket_id' => 3,
        //         'class_id' => $value,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    }
}
