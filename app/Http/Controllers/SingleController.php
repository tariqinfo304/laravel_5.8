<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//php artisan make:controller ShowProfile --invokable
class SingleController extends Controller
{
    function __invoke()
    {
    	echo "It will call every call on this controller because it's a magic method it will call on every method call";
    }
}
