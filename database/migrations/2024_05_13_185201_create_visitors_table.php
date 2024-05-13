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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->integer('site');
            $table->integer('uz');
            $table->integer('ru');
            $table->integer('en');
            $table->integer('auto');
            $table->integer('machine');
            $table->integer('electrics');
            $table->integer('logistics');
            $table->integer('intellectual');
            $table->integer('economics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
