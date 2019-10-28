<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounselorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('counselor_id');
            $table->integer('emp_id')->unsigned();
            $table->string('counselor_type');
            $table->timestamps();

            $table->foreign('emp_id')->references('id')->on('employees');
        });

        // Schema::table('counselors', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('emp_id')
        //     ->references('id')->on('employees')
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
        Schema::dropIfExists('counselors');
    }
}
