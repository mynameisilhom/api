<?php

use App\Models\Department;
use App\Models\Format;
use App\Models\Section;
use App\Models\Type;
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
        // Таблица Type
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignIdFor(Department::class,"department_id")
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->foreignIdFor(Section::class,"section_id")
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->timestamps();

        });

        // Таблица Format
        Schema::create('formats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Таблица File
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');

            $table->foreignIdFor(User::class, 'author_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');

            $table->foreignIdFor(User::class, 'user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');


            $table->foreignIdFor(Type::class,'types_id')
                ->nullable()
                ->constrained('types')
                ->onDelete('set null');

            $table->foreignIdFor(Format::class,"format_id")
                ->nullable()
                ->constrained('formats')
                ->onDelete('set null');

            $table->unsignedBigInteger('group_of');
            $table->unsignedBigInteger('part_of');
            $table->integer('used_times');
            $table->string('zip');
            $table->boolean('active')->default(true);
            $table->timestamps();


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
        Schema::dropIfExists('formats');
        Schema::dropIfExists('types');
    }
};
