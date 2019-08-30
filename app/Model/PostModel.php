<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table="post";
    public $timestamps = false;


    public function comments()
    {
    	return $this->hasMany("App\Model\CommentModel","post_id");
    }
}
