<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\UserClassWatchTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class WatchTimeTest extends TestCase
{

    public $data_create;
    public $data_update;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data_create = [
            'user_id' => 100,
            'class_id' => 1,
        ];
        $this->data_update = [
            'user_id' => 100,
            'class_id' => 1,
        ];
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert()
    {
        /**
         * Requirement user_id belum pernah menonton class terkait
         * atau data belum pernah ada didatabase
         */
        $response = $this->postJson('/api/v1/update-watch-time', $this->data_create);

        $response->assertStatus(201);
    }


    public function test_update()
    {
        /**
         * Requirement user_id harus sudah pernah menonton class terkait atau data ada di database
         */

        $response = $this->postJson('/api/v1/update-watch-time', $this->data_update);

        $response->assertStatus(200);
    }



    // public function test_cache_is_null()
    // {
    //     $user_id = 1;
    //     $class_id = 10;
    //     $date = Carbon::now();
    //     $month = $date->format('m');
    //     $year = $date->format('Y');
    //     $key = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year;
    //     $is_null = Cache::remember($key, Carbon::now()->addDays(1), function () use ($user_id, $class_id, $month, $year) {
    //         return UserClassWatchTime::where('user_id', $user_id)->where('class_id', $class_id)
    //             ->where('month', $month)->where('year', $year)
    //             ->exists();
    //     });
    //     $this->assertFalse($is_null);
    //     // $this->assertFalse($is_null);
    // }

    // public function test_cache_update()
    // {
    //     $user_id = 1;
    //     $class_id = 10;
    //     $date = Carbon::now();
    //     $month = $date->format('m');
    //     $year = $date->format('Y');
    //     $key = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year;

    //     Cache::put($key, true, Carbon::now()->addDays(1));

    //     $cache = Cache::get($key);

    //     $this->assertTrue($cache);
    // }


    // public function test_cache_value()
    // {
    //     $user_id = 1;
    //     $class_id = 10;
    //     $date = Carbon::now();
    //     $month = $date->format('m');
    //     $year = $date->format('Y');
    //     $key = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year;
    //     $cache = Cache::get($key);
    //     $this->assertTrue($cache, 'Cache value should be true');
    // }

    // public function test_cache_increment()
    // {
    //     $user_id = 1;
    //     $class_id = 1;
    //     $date = Carbon::now();
    //     $month = $date->format('m');
    //     $year = $date->format('Y');
    //     $key_inc = 'cache_is_null-user_id=' . $user_id . 'class_id=' . $class_id . 'month=' . $month . 'year=' . $year . 'increment'; //increment key
    //     $data = Cache::remember($key_inc, Carbon::now()->addDays(1), function () use ($user_id, $class_id, $month, $year) {
    //         $data = UserClassWatchTime::where('user_id', $user_id)->where('class_id', $class_id)
    //             ->where('month', $month)->where('year', $year)
    //             ->first();
    //         return (int) $data->watch_minutes;
    //     });

    //     $this->assertNotNull($data);
    //     Cache::increment($key_inc);

    //     $increment_val = Cache::get($key_inc);
    //     $this->assertEquals(21, $increment_val);
    // }
}
