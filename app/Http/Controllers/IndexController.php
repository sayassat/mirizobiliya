<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;

class IndexController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $banners = Banner::all()->sortBy('order');

        return view('index', ['products' => $products, 'banners' => $banners]);
    }
}