<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{

    public function index($id)
    {
        $product = Product::find($id);
        $products = Product::all();

        if (!$product) {
            abort(404, 'Товар не найден');
        }

        return view('product', ['product' => $product, 'products' => $products ]);
    }
}