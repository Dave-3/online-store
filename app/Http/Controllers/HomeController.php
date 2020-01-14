<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Larashop',
            'sub_title' => 'All Products Listing',
            'products' => Product::all(),
        ];

        return view('index')->with($params);
    }

    public function brands($url)
    {
        $brand = Brand::whereUrl($url)->first();

        $params = [
            'title' => $brand->title,
            'sub_title' => "Products by $brand->title",
            'products' => $brand->products, 
        ];

        return view('index')->with($params);
    }

    public function categories($url)
    {
        $category = Category::whereUrl($url)->first();

        $params = [
            'title' => $category->title,
            'sub_title' => "Products in $category->title category",
            'products' => $category->products, 
        ];

        return view('index')->with($params);
    }
}
