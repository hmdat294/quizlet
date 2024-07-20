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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('duration')->default(0);
            $table->unsignedTinyInteger('pass_mark')->default(0);
            $table->unsignedTinyInteger('number_of_questions')->default(0);
            $table->boolean('certification')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
