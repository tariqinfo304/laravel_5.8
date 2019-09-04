<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ShopModel;
use App\Model\CartModel;

use DB;

class ShopController extends Controller
{


    function cart_list()
    {
        $list = DB::table("cart")
        ->join("users","users.id","=","cart.user_id")
        ->join("shop","shop.shop_id","=","cart.product_id")
        ->get();


        return view("Shop.cart_list",["data" => $list]);

    }
    function add_cart($p_id)
    {
        
        $cart = new CartModel();
        $cart->user_id = session("id");
        $cart->product_id = $p_id;
        $cart->save();

        return redirect("cart_list");

    }
    function shop_form()
    {	
        if(session("username"))
        {
            return view("Shop.shop_form");
        }
        else
        {
            return redirect("/login");
        }

//API //
    //	$shop = new ShopModel();
    	//echo json_encode($shop->get());
    	

    }
    function add(Request $request)
    {
    	$request->validate([
            'name' => 'required'
        ]);


    	$shop = new ShopModel();
    	$shop->name = $request->name;
    	$shop->location = $request->location;
    	$shop->phone_no = $request->phone_no;
    	$shop->save();

    	return redirect('shop_list');
    }

     function list()
    {
    	$user = new ShopModel();
    	$list = $user->get();
    	return view("Shop/shop_list",['data' => $list]);
    }
}
