<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function workout() 
    {
        return $this->belongsTo(Workout::class);
    }

    public function instructor() 
    {
        return $this->belongsTo(Instructor::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
