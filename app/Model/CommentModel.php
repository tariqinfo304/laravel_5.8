<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table="comment";
    public $timestamps = false;


    public function post()
    {
        return $this->belongsTo('App\Model\PostModel');
    }
}
