<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
use App\Http\Requests\RegisterUser;
use App\Rules\Uppercase;

class FoodController extends Controller
{
    function index()
    {
    	$data['phone_no'] = "0303-4672394";
    	$data['email']  = "evs@gmail.com";
    	$data['address'] = "Lahore";

    	return view('Food/index',["data" => $data]);
    }

    function register_view()
    {
    	return view('Food/register');
    }
    function register_save(Request $request)//RegisterUser
    {
    	//dd($request);
    	//$uri = $request->path();
    	//$url = $request->url();
    	//$url = $request->fullUrl()
    	//$input = $request->all();
    	//$input = $request->input();
    	//$method = $request->method();
    	//$request->isMethod('post')
    	//$name = $request->query('name');
    	//$name = $request->query('name', 'Helen');
    	//$name = $request->input('first_name', 'xyz');
    	//$name = $request->name;

    	/*
			$input = $request->only(['username', 'password']);

$input = $request->only('username', 'password');

$input = $request->except(['credit_card']);

$input = $request->except('credit_card');
if ($request->has('name')) {
    //
}
if ($request->has(['name', 'email'])) {
    //
}

    	*/
//nullable 
	   
       /*
    	$validatedData = $request->validate([
            'name' => 'required|max:255',
            'height' => 'required',
            'date' => 'date'
        ]);*/
        //Check Request Folder class 


        /*
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        */

        /*
        
        Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ])->validate();

        */

        //rule//
        $validatedData = $request->validate([
            'name' => ['required', 'string', new Uppercase],
            'height' => 'required',
            'date' => 'date'
        ]);


    	$name = $request->input('name');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$con_password = $request->input('con_password');
    	$date = $request->input('date');
    	$phone_no = $request->input('phone_no');
    	$height = $request->input('height');
    	$weight = $request->input('weight');
    	$gender = $request->input('gender');
    		

    	//it will save user-data into user table by using ORM 

    	$user = new UserModel();
    	$user->name= $name;
    	$user->email = $email;
    	$user->dob = $date;
    	$user->phone_no = $phone_no;
    	$user->height = $height;
    	$user->weight = $weight;
    	$user->gender = $gender;
    	$user->save();

    	return redirect('user_list');
    }
    function user_list()
    {
    	$user = new UserModel();
    	$user_list = $user->get();
    	return view("Food/user_list",['data' => $user_list]);
    }
}
