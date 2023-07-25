<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Day extends Model
{
    use HasFactory;
    protected $fillable = [
        'month_id',
        'bomdod',
        'tong',
        'peshin',
        'asr',
        'shom',
        'xufton'
    ];

    public function month(): BelongsTo
    {
        return $this->belongsTo(Month::class);
    }
}
