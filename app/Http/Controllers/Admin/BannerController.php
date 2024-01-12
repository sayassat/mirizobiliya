<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;

class BannerController extends Controller
{
    public function create()
    {
        $products = Product::all();

        return view('admin.banners.create', ['products' => $products]);
    }

    public function index()
    {
        $banners = Banner::all()->sortBy('order');

        return view('admin.banners.banners', ['banners' => $banners]);
    }

    public function add()
    {
        $banner = new Banner();
        $banner->products_id = request('banner');
        $banner->order = request('order');
        $banner->save();
        return redirect('admin/banners')->with('status', "Баннер успешно добавлен");
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        $products = Product::all();
        return view('admin.banners.edit', ['banner' => $banner, 'products' => $products]);
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->products_id = $request->input('product');
        $banner->order = $request->input('order');
        $banner->update();
        return redirect('admin/banners')->with('status', "Данные успешно обновлены");
    }
}