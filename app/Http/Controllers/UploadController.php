<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Categories;

class UploadController extends Controller
{
    public function index() {

    	$categories = Categories::all();


    	
    	return view('upload', compact('categories'));
    }

    public function store(Request $request) {
    	
    	//validate the data
    	$validated_data = $request->validate([
    		'item-name' => 'required|min:3|max:100',
    		'item-short-description' => 'min:3|max:100'
    	]);



    	
    }
}
