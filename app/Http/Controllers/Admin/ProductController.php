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

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->categories_id = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('quantity');
        $picture = $request->file('picture');
        $picture->move('pic', $picture->getClientOriginalName());
        $product->pic = $picture->getClientOriginalName();
        $product->update();
        return redirect('admin/products')->with('status', "Данные успешно обновлены");
    }
}