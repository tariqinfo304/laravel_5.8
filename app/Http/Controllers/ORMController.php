<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ORM;

class ORMController extends Controller
{
    function index()
    {
    	$orm = new ORM();

    	echo "<pre>";

    	
  
    	//print_r($orm);
    	
    	//print_r($orm->findOrFail(1000));

    	//$data = $orm->all();

    	//$data = $orm->orwhere(["id"=> 1 ,"email"=>""])->get();
    	//$data = $orm->first();
    	
    	//$data = $orm->all();

    	/*
    	foreach ($data as $value) {
    		//print_r($value);
    		echo $value->name."<br/>";
    	}*/
    	//print_r($data);


    	//save //
    	

    	/*

    	$orm->name="Haider";
    	$orm->email="haider@gmail.com";
    	$orm->password ="121";
	
		//return type is boolean
    	var_dump($orm->save());
			*/
    	//update//
    	
    	/*
    	$data = $orm->find(16);
    	$data->email = "xyz@gmail.com";
    	var_dump($data->save());
		*/



    	//$orm->name="TEst";
    	//$orm->save();


		//$orm::create(['name' => 'Flight 10']);
    	
    }
}
