<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

//////////////////////////////
//simple route 
Route::get("/",function(){
	echo "Home<br/>";
});


////////////////////////////////
//param routes//

Route::get("/param/{id}/{name}",function($id_old,$name){

	echo "id : " .$id_old."<br/>";
	echo "Name :  " . $name;
});


//////////////////////////////
//optional

Route::get("/optional/{name?}",function($option="Default"){

	echo $option;
});

//////////////////////////////
//Regular Expression Constraints

route::get("/validation/{id}",function($id){

	echo $id;
})
//->where('id','[1-9]'); //accpet only one length digit
//->where('id','[1-9]+'); //accept multiple digits
->where(['id' => '[1-5]+']);

*/
/////////////////////////////////
//Global Constraints
/*

If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. You should define these patterns in the boot method of your  RouteServiceProvider:

 Route::pattern('id', '[0-9]+');
*/

/*
 Route::get("/get_num/{id}",function($id){
 	echo "$id";
 });
*/


/////////////////////////////////////////
 //Encoded Forward Slashes
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');



///////////////////////////////////////
//Redirect Routes

Route::redirect("/redirect","search/23",302);







//it will call on very method type of http
//OR Route::any();
Route::match(['get','put','post','delete'],"/method",function(){

	echo "Method allow GET,PUT,POST,DELETE";
});

//CSRF Protection//
Route::get("/form",function(){
	return view('test',["name" => "CSRF Token Form"]);
});	



/////////////////////////////////////////////
//Named Routes
Route::get("/user/info",function(){

	echo "It's a name route ";
})->name("info");



Route::get('user/{id}/profile', function ($id) {
    echo "It's a name route with parameter id";
})->name('profile');

Route::get("check_name_route",function(){

	//echo route("info"); 
//	return redirect()->route("info");
	return redirect()->route("profile",["id"=>1]);
});



/////////////////////////////////
//Route Groups
////////////////////////////////


Route::group(["prefix" => "user/{id}","as" => "UserInfo."],function($id){

	Route::get("delete",["as" => "Remove",function($id){
		echo "route-group  => user/delete : " .$id;
	}]);

	Route::get("update",["as" => "Edit" ,function($id){

		echo "route-group => user/info : " . $id;
	}]);
});


Route::get("redirect_group",function(){

	return redirect()->route("UserInfo.Remove",["id"=>23]);
});



/////////////////////////
//Route Prefixes


Route::prefix("admin/{id}")->group(function($id){

	Route::get("user",function($id){
		echo "Rout ePrefix . " . $id;
	});//->where(["id" => "[1-5]+"]);
});



/*

Route::fallback(function () {
    echo "NULL Return";
});

*/