<?php

use App\Models\Department;
use App\Models\Position;
use App\Models\Role;
use App\Models\Section;
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
        Schema::create('people', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class, 'user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');

            $table->foreignIdFor(Department::class, 'department_id')
                ->nullable()
                ->constrained('departments')
                ->onDelete('set null');

            $table->foreignIdFor(Section::class, 'section_id')
                ->nullable()
                ->constrained('sections')
                ->onDelete('set null');

            $table->foreignIdFor(Position::class, 'position_id')
                ->nullable()
                ->constrained('positions')
                ->onDelete('set null');

            $table->foreignIdFor(Role::class, 'role_id')
                ->nullable()
                ->constrained('roles')
                ->onDelete('set null');

            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('passport_number')->nullable()->unique();
            $table->unsignedBigInteger('passport_pin')->nullable()->unique();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
