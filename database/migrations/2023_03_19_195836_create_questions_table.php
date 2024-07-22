<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('id')->on('quizs')->onDelete('cascade');
            $table->text('question');
            $table->text('option_1');
            $table->text('option_2');
            $table->text('option_3');
            $table->text('option_4');
            $table->tinyInteger('answer');
            $table->timestamps();
        });
        Schema::create('questions_essay', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')->references('id')->on('quizs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('qs_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qe_id');
            $table->foreign('qe_id')->references('id')->on('questions_essay')->onDelete('cascade');
            $table->text('question');
            $table->text('answer');
            $table->timestamps();
        });
        //treui [blank] dsgadg [blank]
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
