<?php

namespace App\Classes;

use App\Products;

class ProductsClass {

	public function getAllProducts($string) {

		
		echo $string;
		$products = Products::all();

    	print_r($products);

    	exit;
	}
}