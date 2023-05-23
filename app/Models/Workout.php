<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
