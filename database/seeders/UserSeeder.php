<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Mentor;
use App\Models\Paket;
use App\Models\User;
use App\Models\UserClassWatchTime;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        UserClassWatchTime::truncate();
        Paket::truncate();
        Mentor::truncate();
        Classes::truncate();

        User::factory()->count(3)->create();
    }
}
