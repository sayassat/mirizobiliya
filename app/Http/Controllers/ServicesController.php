<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ServicesController extends Controller
{
    public function index()
    {
        $products = Product::where('type','Услуга')->get();

        return view('services', ['products' => $products]);
    }
}