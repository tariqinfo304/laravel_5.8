<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   

        /*
            
            Encrypted values are passed through serialize during encryption, which allows for encryption of objects and arrays. 
        
        //WE CAN PASS OBJECT AND ARRAY TO THI SFUNCTION 
           // encrypt(["123","@3"]);
            //decrypt

        */


        //$user = new User();

        /*
        $encrypted =  encrypt($user);
        echo  $encrypted ."</br>";
        
        dd(decrypt($encrypted));
        */

        /*

        $encrypted =  Crypt::encryptString("admin");
        echo Crypt::decryptString($encrypted);
        
        */
        

        /*
        $hash_string = Hash::make("admin");
        

        echo $hash_string;
        
        echo "<br/>";

        var_dump(Hash::check('admin1', $hash_string));
        
        */

        

        /*

        // Get the currently authenticated user...
        $user = Auth::user();

        // Get the currently authenticated user's ID...
        $id = Auth::id();


        echo $user;

        echo "<br/>";
        echo $id;

        */
     
      
      //add in method Request $request
     // echo $request->user();


        /*
    if (Auth::check()) {
            echo "The user is logged in...";
        }
        */

        
        return view('home');
    }
}
