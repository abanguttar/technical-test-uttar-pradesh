<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as FakerFactory;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentor_id = 2;
        $kelas1 = ['A', 'B', 'C'];
        $kelas2 = ['D', 'E', 'F'];
        $kelas3 = ['X', 'Y', 'Z'];
        $faker = FakerFactory::create();;

        foreach ($kelas1 as $key => $value) {
            Classes::create([
                'mentor_id' => $mentor_id,
                'title' => 'Kelas ' . $value,
                'description' => $faker->text()
            ]);
        }
    }
}
