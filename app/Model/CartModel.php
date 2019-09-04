<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    
    protected $table="cart";
    public $timestamps = false;


    function user()
    {
    	return $this->belongsToMany("App\Model\UserModel","user_id");
    }

    function product()
    {
    	return $this->belongsToMany("App\Model\ShopModel","product_id","shop_id");
    }
}
