<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilerController extends Controller
{
	/*
		Laravel's database query builder provides a convenient, fluent interface to creating and running database queries
	*/
    function query()
    {
    	echo "<pre>";
    	/////////////////////
    	//select//
    	///////////////
    	
    	$user_list = DB::table('users')->get();
    	print_r($user_list);
    	
    	/*
    	The get method returns an Illuminate\Support\Collection containing the results where each result is an instance of the PHP stdClass object. 
    	*/
    	/*
    	foreach ($user_list as $value) {
    		echo $value->name;
    	}
    	*/

    	///////////////////////
    	////////Retrieving A Single Row / Column From A Table
    	////////////////////

    	/*
    	//print_r(DB::table('users')->where('id',1)->get());
    	//print_r(DB::table('users')->where('id',1)->first());
    	//print_r(DB::table('users')->where('id',1)->value('name'));
    	//print_r(DB::table('users')->where('id',1)->get('name'));
    	print_r(DB::table('users')->find(1));
		
		*/


    	/////////////////////////////////
    	//Retrieving A List Of Column Values
    	//////////////////////////////////

    	/*
    	//If you would like to retrieve a Collection containing the values of a single column, you may use the pluck method
    	print_r(DB::table('users')->pluck('name'));

    	//You may also specify a custom key column for the returned Collection:
    	//print_r(DB::table('users')->pluck('name','email'));
    	*/



    	///////////////////////////////////
    	//Chunking Results
    	/////////////////////////////////////

    	/*
    	If you need to work with thousands of database records, consider using the chunk method. This method retrieves a small chunk of the results at a time and feeds each chunk into a  Closure for processing.
    	*/
    	/*
    	DB::table('users')->orderBy('id')->chunk(2, function ($users) {
		   print_r($users);

		   //You may stop further chunks from being processed by returning false from the Closure:
		   //return false;
		});
		*/


		/*
		If you are updating database records while chunking results, your chunk results could change in unexpected ways. So, when updating records while chunking, it is always best to use the  chunkById method instead. This method will automatically paginate the results based on the record's primary key:
		*/

		/*
		DB::table('users')
			->orderBy('id')
			->chunkById(2,function($users){

				print_r($users);
		});
		*/


		//////////////////////
		//Aggregates
		///////////////////////
		/*
		The query builder also provides a variety of aggregate methods such as count, max, min,  avg, and sum. You may call any of these methods after constructing your query:
		*/

		//print_r(DB::table('users')->count());
		//print_r(DB::table('users')->max('id'));


		//////////////////////
		//Determining If Records Exist
		///////////////////////

		//var_dump(DB::table('users')->where('id', 22)->exists());

		//var_dump(DB::table('users')->where('id', 11)->doesntExist());


		//////////////////////////////
		///Selects
		///////////////////////////////

		/*
		
		$users = DB::table('users')->select('name', 'email as user_email')->get();
		//The distinct method allows you to force the query to return distinct results:

		$users = DB::table('users')->distinct()->get();
		//If you already have a query builder instance and you wish to add a column to its //existing select clause, you may use the addSelect method:

		$query = DB::table('users')->select('name');

		$users = $query->addSelect('age')->get();
		*/


		//////////////////////////
		/////////Raw Expressions
		/////////////////////////
		/*
		$users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, name'))
                     ->where('name', '<>', '1')
                     ->groupBy('name')
                     ->get();
        print_r($users);
        */
    }
}
