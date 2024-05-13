<?php

use App\Models\Department;
use App\Models\Role;
use App\Models\Section;
use App\Models\Time;
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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->foreignIdFor(Time::class,'time_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->foreignIdFor(Department::class,'department_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->foreignIdFor(Section::class,'section_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->foreignIdFor(Role::class,'role_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            $table->string('phone')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
