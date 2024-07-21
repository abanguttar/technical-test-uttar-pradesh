<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::unprepared('DROP PROCEDURE IF EXISTs update_watch_time');
        DB::unprepared('CREATE PROCEDURE update_watch_time(IN ui INT, IN ci INT, IN wt INT, time_update VARCHAR(250))
        
        UPDATE user_class_watch_times SET watch_minutes=wt, updated_at=time_update WHERE user_id = ui AND class_id=ci;

        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedure_update_watch_time');
    }
};
