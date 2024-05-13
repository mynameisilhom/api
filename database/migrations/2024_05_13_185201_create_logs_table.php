<?php

use App\Models\User;
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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('from');
            $table->string('to');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');

            $table->foreignIdFor(User::class, 'user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');

            $table->string('url');
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
