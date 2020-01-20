<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use App\Products;
use App\Categories;
use App\Currency;
use App\Users;

class UploadController extends Controller
{
    public function index() {

    	$categories = Categories::all();

    	$currencies = Currency::all();


    	
    	return view('upload', compact('categories', 'currencies'));
    }

    public function uploaded() {

    	$last_uploaded_item = Products::join('categories', 'products.item_category_id', 'categories.id')
    									->join('currency', 'products.item_price_currency_id', 'currency.id')
    									->where('products.item_owner_id', Auth::id())
    									->orderBy('products.id', 'desc')
    									->select(
    										'categories.*', 
    										'products.*',
    										'currency.currency_ISO_3 as ISO')
    									->limit(1)
    									->get();


    	return view('upload-finish', compact('last_uploaded_item'));
    }

    public function store(Request $request) {
    	
    	//validate the data
    	$validated_data = $request->validate([
    		'item-name' => 'required|min:3|max:100',
    		'item-short-description' => 'min:3|max:100'
    	]);


    	//for future use
    	$string_code = Str::random(30);

    	$new_item = new Products;

    	$new_item->item_name = $request->input('item-name');
    	$new_item->item_description = $request->input('item-short-description');
    	$new_item->item_detailed_description = $request->input('item-long-description');
    	$new_item->item_category_id = $request->input('item-category-id');
    	$new_item->item_quantity_in_stock = $request->input('quantity');
    	$new_item->item_price = $request->input('item-price');
    	$new_item->item_price_currency_id = $request->input('item-price-currency');
    	$new_item->item_note = $request->input('item-note');
    	$new_item->item_owner_id = Auth::id();

    	$new_item->save();

    	//return redirect()->route('upload-finish', ['tempSTR'=>$string_code])->with('status', 'success');
    	return redirect('upload-finish')->with('status', 'success');

    	
    }
}
