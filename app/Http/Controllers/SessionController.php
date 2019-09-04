<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\UserModel;

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


        $user = UserModel::where("username",$request->username)
                    ->where("password",$request->password)
                    ->get();



        if(!empty($user) && isset($user[0]->username))
        {
          session(['username' => $user[0]->username,

                  "id" => $user[0]->id]);
        }
        else
        {
           return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }




        

        return redirect("/");

  	}

  	function logout()
  	{
  		session()->forget("username");
  		session()->flush();
  		return redirect("login");
  	}
}
