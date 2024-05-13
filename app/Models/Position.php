<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $guarded = ['id'];
    protected $fillable = [
        'time_id',
        'department_id',
        'name',
        'phone',
        'active',
        ];

    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
