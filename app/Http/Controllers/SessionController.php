<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SessionController extends Controller
{
  	function login()
  	{
  		return view("session/login");
  	}

  	function do_login(Request $request)
  	{

  		$validator = Validator::make($request->all(), [
            'username' => 'required|min:4|max:25',
            'password' => 'required|min:3',
        ]);

  		if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        session(['username' => $request->username]);

        return redirect("/");

  	}

  	function logout()
  	{
  		session()->forget("username");
  		session()->flush();
  		return redirect("login");
  	}
}
