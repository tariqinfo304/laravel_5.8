<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ShopModel;

class ShopController extends Controller
{
    function shop_form()
    {	

//API //
    //	$shop = new ShopModel();
    	//echo json_encode($shop->get());
    	return view("Shop.shop_form");

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