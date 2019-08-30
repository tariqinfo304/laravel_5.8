<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PhoneModel extends Model
{
    protected $table="phone";
    public $timestamps = false;
    protected $primaryKey = "phone_id";


    public function user()
    {
    	//return $this->belongsTo('App\Model\UserModel', 'foreign_key', 'other_key');
        return $this->belongsTo('App\Model\UserModel');
    }
}
