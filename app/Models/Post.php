<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        //2+ parameters here is unnecessary
        //learning pivot table keys relationships
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'post_id', relatedPivotKey: 'tag_id');
    }

}
