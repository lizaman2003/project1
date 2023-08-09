<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->enum('time_start', ['16:45-18:15', '18:30-20:00','20:15-21:30']);
            $table->enum('number_cabinet',['1','2']);
            $table->unsignedBigInteger('lesson_name');
            $table->foreign('lesson_name')->references('id')->on('name_lessons');
            $table->unsignedBigInteger('teacher');
            $table->foreign('teacher')->references('id')->on('users');
            $table->integer('places')->default('12');
            $table->date('time');
            $table->unsignedBigInteger('id_level');
            $table->foreign('id_level')->references('id')->on('levels');
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
        Schema::dropIfExists('lessons');
    }
};
