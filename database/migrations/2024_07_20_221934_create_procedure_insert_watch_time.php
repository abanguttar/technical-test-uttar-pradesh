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
        DB::unprepared("DROP PROCEDURE IF EXISTS insert_watch_time");
        DB::unprepared("CREATE PROCEDURE insert_watch_time(IN user_id INT, IN class_id INT, IN month_insert INT, IN year_insert INT, time_insert VARCHAR(250))
       
       INSERT INTO user_class_watch_times (user_id, class_id, year, month, watch_minutes, created_at, updated_at) VALUES (user_id, class_id, year_insert, month_insert,1, time_insert, time_insert);
       
       ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedure_insert_watch_time');
    }
};
