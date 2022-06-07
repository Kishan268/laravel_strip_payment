<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    public function getProducts()
    {
    	$products = Products::all();
    	return view('product',compact('products'));
    }
    public function productDetails($id)
    {
    	$productsDetails = Products::where('id',$id)->first();
    	return view('product_details',compact('productsDetails'));
    }
}
