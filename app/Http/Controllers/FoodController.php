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
    	return view('Food/index',["phone_no" =>"0303-4672394"
            ,"email" => "evs@gmail.com","address" => "Lahore"]);
    }

    function register_view()
    {
    	return view('Food/register');
    }


    function register_save(Request $request)//RegisterUser
    {
       // echo "<pre>";
    	//dd($request);
    //	echo $request->path() ."<br/>";
    //	echo  $request->url()."<br/>";;
    	//echo $request->fullUrl()."<br/>";
    	
       // print_r( $request->all());
    	//$input = $request->input();
    	
       // echo $request->method();
    	//echo $request->isMethod('post');
    	//echo $name = $request->query('name');
    	//$name = $request->query('name', 'Helen');
    	//echo $request->input('name1', 'xyz');
    	//echo $name = $request->name;

       

    	
			//print_r($request->only(['name', 'password']));
/*
$input = $request->only('username', 'password');

$input = $request->except(['email']);

$input = $request->except('email');

if ($request->has('name1')) {
    die("ok");
}
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
            'date' => 'required'
        ]);
    */



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

        /*
        //rule//
        $validatedData = $request->validate([
            'name' => ['required', 'string', new Uppercase],
            'height' => 'required',
            'date' => 'date'
        ]);*/



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

        //die();

        ///file handling //
        
        if ($request->hasFile('file_attach')) {
            
            if ($request->file('file_attach')->isValid()) {


                /*
                $file = $request->file('file_attach');
                
                echo $request->file_attach->path();
                echo "<br/>";
                var_dump($request->file_attach->extension()). "<br/>";

                die("ok");
                */
                //$path = $request->file_attach->store("images");
               // echo $request->file_attach->path();;
                $ext =  $request->file_attach->extension();
                $name = "file_".rand().".".$ext;
                /*
                if($ext)
                    $name = "file_".rand().".".$ext;
                else
                    $name = "file_".rand();
                    */

                $path = $request->file_attach->storeAs("images",$name );
                die( $path);
            }   
        }
        else
        {
            die("no");
        }

    	return redirect('user_list');
    }
    function user_list(Request $req)
    {
        //print_r($req->session()->all());
    	$user = new UserModel();
       // $user_list = $user->all();

        //{ (n -1) * total_record } , total_record
    	$user_list = $user->paginate(2);
       // $user_list = $user->simplePaginate(2);
       // dd($user_list);
    	return view("Food/user_list",['data' => $user_list]);
    }
}
