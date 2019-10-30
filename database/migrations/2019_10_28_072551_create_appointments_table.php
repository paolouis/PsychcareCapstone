<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('appointment_id');
            $table->integer('stud_id')->unsigned();
            $table->integer('sched_id')->unsigned();
            $table->string('schedule_time');
            $table->timestamps();

            $table->foreign('stud_id')->references('stud_id')->on('students');
            $table->foreign('sched_id')->references('sched_id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
