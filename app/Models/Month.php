<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Month extends Model
{
    use HasFactory;
    protected $fillable = [
        'year_id',
        'name',
    ];
    public function day(): HasMany
    {
        return $this->hasMany(Day::class);
    }
    public function year(): BelongsTo
    {
        return $this->belongsTo(Year::class);
    }
}
