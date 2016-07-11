<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('institute');
            $table->string('teacher');
            $table->string('category');
            $table->string('description');
            $table->integer('series_id')->unsigned();
            $table->foreign('series_id')->references('id')
                ->on('series')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('episode_id')->unsigned();
            $table->foreign('episode_id')->references('id')
                ->on('episode')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course');
    }
}
