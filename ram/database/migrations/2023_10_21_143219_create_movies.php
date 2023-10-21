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
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // bigint - primary key - autoincrement
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->date('released_date')->nullable();
            $table->float('rating', 4, 2)->default(0);
            $table->timestamps(); // dos columnas: created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
