<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\ProductsClass as Products;

class HomeController extends Controller
{
    public function index() {

    	// get all products
    	$products = new Products();
    	
    	$all_products = $products->getAllProducts();    	

    	
    	return view('welcome', compact('all_products'));
    }
}
