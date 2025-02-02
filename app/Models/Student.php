<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'surnames',
        'school_id',
        'date_of_birth',
        'city'
    ];

    // * Relations

    public function school() : BelongsTo
    {
        return $this->belongsTo(School::class);
    }
}
