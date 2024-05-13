<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'info',
        'phone',
        'code',
        'structure_type_name',
        'structure_type_code',
        'locality_type_name',
        'locality_type_code',
        'active'
    ];
}
