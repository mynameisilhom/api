<?php

use App\Models\File;
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
        Schema::create('news_uzs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('content');
            $table->integer('likes');

            $table->foreignIdFor(File::class, 'file_id')
                ->nullable()
                ->constrained('files')
                ->onDelete('set null');

            $table->foreignIdFor(User::class, 'user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');

            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news__uzs');
    }
};
