<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use stdClass;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Paket;
use App\Models\Mentor;
use App\Models\Classes;
use App\Models\UserSubscription;
use App\Models\UserClassWatchTime;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create dummy user
        User::factory()->count(3)->create();
        $mentor_id = 1;
        $kelas1 = ['A', 'B', 'C'];
        $faker = FakerFactory::create();;

        // Create dummy class
        foreach ($kelas1 as $key => $value) {
            Classes::create([
                'mentor_id' => $mentor_id,
                'title' => 'Kelas ' . $value,
                'description' => $faker->text()
            ]);
        }
        // Create dummy mentor
        Mentor::factory()->count(3)->create();

        // Create dummy paket
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

        // Create dummy subscription
        UserSubscription::create([
            'user_id' => 1,
            'paket_id' => 1,
            'start_date' => Carbon::now()->toDateString(),
            'end_date' => Carbon::now()->toDateString(),
        ]);

        $obj = new stdClass();
        $obj->user_id = 1;
        $obj->class_id = [1, 2, 3];
        $obj->watch_minutes = [20, 50, 30];

        // Create dummy watch time use
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
