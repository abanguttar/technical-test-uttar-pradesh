<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\UserSubscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = range(1, 1);
        $users2 = range(5, 7);
        $users3 = range(8, 9);

        foreach ($users as $key => $val) {
            # code...
            UserSubscription::create([
                'user_id' => $val,
                'paket_id' => 1,
                'start_date' => Carbon::now()->toDateString(),
                'end_date' => Carbon::now()->toDateString(),
            ]);
        }
    }
}
