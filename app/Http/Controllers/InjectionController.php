<?php
namespace App\Http\Controllers;

use App\Model\Login;
use Illuminate\Http\Request;

class InjectionController extends Controller
{
	private $user_obj;
    function __construct(Login $user)
    {
    	$this->user_obj = $user;
    }
    function get_list(Login $user)
    {	
    	print_r($this->user_obj);
    	//print_r($user);
    }	
}
