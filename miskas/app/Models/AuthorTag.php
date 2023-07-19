<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorTag extends Model
{
    use HasFactory;

    public $timestamps = false;



    // public function author()
    // {
    //     return $this->belongsTo(Author::class, 'author_id', 'id');
    // }

    // public function tag()
    // {
    //     return $this->belongsTo(Tag::class, 'tag_id', 'id');
    // }
}
