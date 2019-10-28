<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('sched_id');
            $table->integer('counselor_id')->unsigned();
            $table->string('schedule');
            $table->timestamps();

            $table->foreign('counselor_id')->references('counselor_id')->on('counselors');
        });


        // Schema::table('schedule', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('counselor_id', 'fk_sched_counselor_id')
        //     ->references('counselor_id')->on('counselors')
        //     ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
