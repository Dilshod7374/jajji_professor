<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function number()
    {
        return $this->belongsTo(Number::class);
    }
}