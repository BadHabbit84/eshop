<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Classes\ProductsClass as Prods;

class HomeController extends Controller
{
    public function index(Prods $prods) {


    	

    	$prods->getAllProducts('8989');





    	$products = Products::all();

    	print_r($products);

    	exit;
    	return view('welcome');
    }
}
