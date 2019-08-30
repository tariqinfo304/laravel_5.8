<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table="users";

    function phone()
    {
    	//by default it will take value like phone_model_id
    	//return $this->hasOne('App\Model\PhoneModel', 'foreign_key', 'local_key');
    	return $this->hasOne('App\Model\PhoneModel',"user_id");
    }


    function roles()
   	{
   		//many-to-many relations requires the presence of an intermediate table
   		return $this->belongsToMany("App\Model\RoleModel","role_user","user_id","role_id");
   		//return $this->belongsToMany("App\Model\RoleModel","role_user","user_id","role_id")->withPivot('id_value');
   	}
}
