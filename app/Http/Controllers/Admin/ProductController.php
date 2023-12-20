<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        // Create a new product
        Product::create($validatedData);

        // Redirect to a success page or product listing
        return redirect()->route('products.create')->with('success', 'Product created successfully.');
    }

    public function index()
    {
        $products = Product::all();

        return view('admin.products.products', ['products' => $products]);
    }
}