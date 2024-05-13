<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Format extends Model
{
    use HasFactory;
    protected $table = "formats";
    protected $fillable = ['name'];

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
}
