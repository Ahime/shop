<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainController extends Controller
{
    public function index(){
    	$products = Product::all();
    	return view('index', compact('products'));
    }

    public function show($id) {
    	$product = Product::find($id);
		$title = $product->label;
        $products = Product::all();
    	return view('pages.detailproduct',compact('title', 'product','products'));
    }
    public function showShop() {

        return view('pages.shop');
    }

    public function create() {

        return view('pages.CreateShop');
    }

}
