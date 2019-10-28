<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('categories_id')->unsigned();
            $table->integer('counselor_id')->unsigned();
            $table->integer('question_type');
            $table->string('questions');
            $table->timestamps();

            $table->foreign('categories_id')->references('categories_id')->on('categories');
            $table->foreign('counselor_id')->references('counselor_id')->on('counselors');
        });

        // Schema::table('questions', function (Blueprint $table) {
        //     $table->engine = 'InnoDB';
        //     $table->foreign('categories_id')
        //     ->references('id')->on('categories');
    

        //     $table->foreign('counselor_id')
        //     ->references('id')->on('counselors');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
