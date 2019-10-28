<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('test_id');
            $table->integer('stud_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->timestamps();

            $table->foreign('stud_id')->references('stud_id')->on('students');
            $table->foreign('categories_id')->references('categories_id')->on('categories');


        });

        // Schema::table('tests', function (Blueprint $table ) {
        //     $table->engine = 'InnoDB';

        //       $table->foreign('stud_id', 'fk_tests_stud_id')
        //      ->references('stud_id')->on('students')
        //      ->onDelete('cascade');

        //     $table->foreign('categories_id', 'fk_tests_categories_id')
        //     ->references('categories_id')->on('categories')
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
        Schema::dropIfExists('tests');
    }
}
