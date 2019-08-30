<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//one-to-one
use App\Model\UserModel;
use App\Model\PhoneModel;
//one-to-many

use App\Model\PostModel;
use App\Model\CommentModel;


//many-to-many
use App\Model\RoleModel;


use DB;
class OrmAdvanceController extends Controller
{
    function one_to_one()
    {
    	echo "<pre>";
    	
    	//Direct Relationship	
    	
        /*
    	$user = new UserModel();
    	$user = $user->find(1)->phone;
    	*/

    	
    	//inverse Relationship
    	$phone = new PhoneModel();
    	$user = $phone->find("1")->user;
		

    	print_r($user);
    }

    function one_to_many()
    {
    	echo "<pre>";
    	//direct 
    	
        /*
    	$comment_obj = new PostModel();
    	$comment_data = $comment_obj->find(1)->comments;
    	//print_r($comment_data);
    	   
        foreach ($comment_data as $row) {
            echo $row->description."<br/>";
        }
        */
    	//inverse
        
    	$comment = new CommentModel();
    	$comment = $comment->find(4)->post;
        print_r($comment);
            	
        

    }

    function many_to_many()
    {
    	echo "<pre>";

    	//direct//
    	
        /*
    	$user = new UserModel();
    	$roles = $user->find(2)->roles;

    	foreach ($roles as $row) {
    		echo $row->name;
    		echo "<br/>";
    	}
        */

        

    	//inverse//

    	$role = new RoleModel();
    	$users= $role->find(1)->users;
    	foreach ($users as $row) {

    		
    		echo $row->name;
    		echo "<br/>";

    		//to get intermediate table column value//
    		//echo $row->pivot->id_value;
    	}
        
    }


    function eager_loading()
    {

    	$post = new PostModel();
    	
    	DB::enableQueryLog(); 

    	/*
    	$post_list = $post->all();
    	foreach ($post_list as $row) {
    		//echo "POST Title : " . $row->title;
    		//echo "<br/>";
    		foreach ($row->comments as $c_row) {
    			//echo $c_row->user_id ." :: " . $c_row->description;
    			//echo "<br/>";
    		}
    	}
    	*/
    	$post_list = $post->with('comments')->get();
		foreach ($post_list as $book) {
		    //echo $book->comments;
		}


    	dd(DB::getQueryLog());
    }
}
