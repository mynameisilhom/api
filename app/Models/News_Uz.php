<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News_Uz extends Model
{
    use HasFactory;
    protected $table = 'news_uzs';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'language_id',
        'file_id',
        'user_id',
        'views',
        'published',
    ];

    // Define the relationships
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
