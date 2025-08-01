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
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position')->nullable(); // contoh: CEO, Freelancer, dsb.
            $table->text('comment');
            $table->integer('rating')->default(5);
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration s.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
