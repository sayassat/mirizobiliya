<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', ['categories' => $categories]);
    }

    public function index()
    {
        $products = Product::all();

        return view('admin.products.products', ['products' => $products]);
    }
}