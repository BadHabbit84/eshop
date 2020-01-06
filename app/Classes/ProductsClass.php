<?php

namespace App\Classes;

use App\Products;

class ProductsClass {

	public function getAllProducts() {

		
		$products = Products::all();

    	if (is_object($products)) {
    		return $products;
    	}    	

    	// fallback(there are no products)
    	return false;
	}
}