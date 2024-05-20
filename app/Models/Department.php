<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'code',
        'info',
        'phone',
        'is_head',
        'is_academic',
        'structure_type_name',
        'structure_type_code',
        'locality_type_name',
        'locality_type_code',
        'parent',
        'active'
    ];

    public function parent()
    {
        return $this->belongsTo(Department::class, 'parent');
    }
}
