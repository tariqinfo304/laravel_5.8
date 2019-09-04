<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function user_add_view()
    {
    	return view("user/register");
    }
    
    function user_add(Request $req)
    {
    	
    	echo "User Added";
    }
}
