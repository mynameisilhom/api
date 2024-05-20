<?php

use App\Models\Department;
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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('code');
            $table->text('info')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('is_head')->nullable()->default(false);
            $table->boolean('is_academic')->nullable()->default(false);
            $table->string('structure_type_name')->nullable();
            $table->char('structure_type_code')->nullable();
            $table->string('locality_type_name')->nullable();
            $table->char('locality_type_code')->nullable();
            $table->integer('parent')->nullable();
//            $table->foreignId('parent_id')->nullable()->constrained('departments');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
