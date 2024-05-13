<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission_Role extends Model
{
    use HasFactory;
    protected $table = 'permission_roles';
    protected $guarded = ['id'];
    protected $fillable = [
        'role_id',
        'permission_id',
        'active',
        ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }
}
