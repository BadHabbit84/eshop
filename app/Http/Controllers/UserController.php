<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Products;

class UserController extends Controller
{
    

    public function myItems() {


    	$my_id = Auth::id();

    	$my_items = Products::where('item_owner_id', $my_id)
    						->get();


    	return view('my-items', compact('my_items'));
    }

    public function checkItem($id) {

    	//get user id
    	$my_id = Auth::id();

    	$item = Products::where('item_owner_id', $my_id)
    						->where('id', $id)
    						->first();



    	return view('item', compact('item'));


    }
}
