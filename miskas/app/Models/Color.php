<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class);
        // return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
