<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;
    protected $table = 'sections';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'department_id',
        'active',
        ];
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
