<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.categories', ['categories' => $categories]);
    }
}