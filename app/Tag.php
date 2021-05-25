<?php

namespace App;

use App\Video;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
    	$this->morphedByMany(Post::class,'taggable');
    }

    public function videos()
    {
    	$this->morphedByMany(Video::class,'taggable');
    }
}
