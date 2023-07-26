<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;

    protected $fillable = [
        'colors'
    ];

    public $timestamps = false;

    protected $casts = [
        'colors' => 'array'
    ];


}
