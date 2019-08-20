<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/*
/////////////////////
	Table Name
////////////////////
Eloquent use plural name of Model class as tables name
so we can add $table property for table name also.
////////////////////////
	Primary Keys
///////////////////////
Eloquent will also assume that each table has a primary key column named id. You may define a protected $primaryKey property to override this convention:
////////////////////////
 	Auto Incrementing integer value
///////////////////////
.Eloquent assumes that the primary key is an incrementing integer value, which means that by default the primary key will automatically be cast to an int. If you wish to use a non-incrementing or a non-numeric primary key you must set the public $incrementing property on your model to false:
public $incrementing = false;
////////////////////////////////
If your primary key is not an integer, you should set the protected $keyType property on your model to string:
protected $keyType = 'string';
/////////////////////////////////
	Timestamps
//////////////////////////////////
By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the  $timestamps property on your model to false:
 
 public $timestamps = false;
//////////////////////////////

If you need to customize the names of the columns used to store the timestamps, you may set the CREATED_AT and UPDATED_AT constants in your model:

 const CREATED_AT = 'creation_date';
 const UPDATED_AT = 'last_update';

////////////////////////////////////////
	Default Attribute Values
//////////////////////////////////////////
If you would like to define the default values for some of your model's attributes, you may define an $attributes property on your model:
   protected $attributes = [
        'delayed' => false,
    ];
 ///////////////////////////////////


*/
class ORM extends Model
{
	//protected $table = "users";
    protected $table = "test";
    protected $primaryKey = "test_id";

    //protected $connection = 'sqlite';
   // public $incrementing = false;
   // protected $keyType = 'string';
	 public $timestamps = false;

	// const CREATED_AT = 'creation_date';
 	// const UPDATED_AT = 'last_update';

	protected $attributes = ['name' => "xyz Jamal"];

	/*
	While $fillable serves as a "white list" of attributes that should be mass assignable, you may also choose to use $guarded. 
	The $guarded property should contain an array of attributes that you do not want to be mass assignable. 
	*/
	//Mass Assignment
	//for create method//
	//protected $fillable = ['name'];
	//protected $guarded = ['name'];
}
