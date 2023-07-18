<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function colors()
    {
        return $this->hasMany(Color::class, 'author_id', 'id');
    }

    // public function authorTags()
    // {
    //     return $this->hasMany(AuthorTag::class, 'author_id', 'id');
    // }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'author_tags', 'author_id', 'tag_id');
    }
}
