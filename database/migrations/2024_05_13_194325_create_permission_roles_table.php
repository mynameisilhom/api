<?php

use App\Models\Permission;
use App\Models\Role;
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
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Role::class,'role_id')
                ->nullable()
                ->constrained('roles')
                ->onDelete('set null');

            $table->foreignIdFor(Permission::class,'permission_id')
                ->nullable()
                ->constrained('permissions')
                ->onDelete('set null');

            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_roles');
    }
};
