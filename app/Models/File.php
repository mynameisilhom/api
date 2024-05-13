<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;
    protected $table = "files";
    protected $fillable = [
        'title',
        'slug',
        'types_id',
        'format_id',
        'user_id',
        'group_of',
        'part_of',
        'uploaded_by',
        'collaborator',
        'used_times',
        'zip',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'types_id');
    }

    public function format(): BelongsTo
    {
        return $this->belongsTo(Format::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
