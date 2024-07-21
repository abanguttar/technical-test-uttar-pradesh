<?php

namespace Database\Seeders;

use App\Models\UserClassWatchTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use stdClass;

class UserClassWatchTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Try to user id 1
         */

        $user_id = 1;

        $obj = new stdClass();
        $obj->user_id = 1;
        $obj->class_id = [2];
        $obj->watch_minutes = [50];

        foreach ($obj->class_id as $key => $value) {
            UserClassWatchTime::create([
                'user_id' => $obj->user_id,
                'class_id' => $value,
                'year' => 2024,
                'month' => 7,
                'watch_minutes' => $obj->watch_minutes[$key],
            ]);
        }
    }
}
