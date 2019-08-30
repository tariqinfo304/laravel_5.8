<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
   	protected $table="role";
   	protected $primaryKey = "role_id";
   	public $timestamps= false;


   	function users()
   	{
   		//many-to-many relations requires the presence of an intermediate table
   		return $this->belongsToMany("App\Model\UserModel","role_user","role_id","user_id");
   		//return $this->belongsToMany("App\Model\UserModel","role_user","role_id","user_id")->withPivot('id_value');
   	}
}
