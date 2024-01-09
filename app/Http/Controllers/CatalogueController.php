<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CatalogueController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('catalogue', ['products' => $products]);
    }
}