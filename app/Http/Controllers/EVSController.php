<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*Controllers are not required to extend a base class. However, you will not have access to convenience features such as the middleware, validate, and dispatch methods.
*/
class EVSController extends Controller
{
    function __consturct()
    {
    	parent::super();
    }
    function get_form()
    {
    	$name="Value from controller method";
    	//echo"Return form view";
    	return view("EVS/get_form",["name" => $name]);
    }
    function form_parm_method($id,$name="")
    {
    	echo "Param method of controller   : " . $id;
        echo "$name";
    }
}
