<?php

namespace App;

use App\Tag;
use App\User;
use App\Image;
use App\Category;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
    	return $this->belognsTo(Category::class);
    }

    public function user()
    {
    	return $this->belognsTo(User::class);
    }

  	public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }

    public function comments()
    {
    	return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
    	return $this->morphToMany(Tag::class,'taggable');
    }
}
