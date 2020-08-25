<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LandingPageController extends Controller
{
    public function index()
    {
    	$products = Product::inRandomOrder()->take(9)->get();

    	return view('frontend.pages.home',['products' => $products]);
    }
    public function shop()
    {
        // $products = Product::inRandomOrder()->take(9)->get();

        return view('frontend.pages.shop');
    }
}
