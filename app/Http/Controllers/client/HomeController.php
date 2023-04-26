<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Vendor;


class HomeController extends Controller
{
    public function index(){
        $categories = Category::whereNull('parent_id')->with('parent', 'product')->get();
        $trendyProduct = Product::limit(8)->with('images')->get();//trendy
        $newProduct = Product::latest()->limit(8)->get();//new products
        $vendors = Vendor::all();

        return view('client.home.index',
                        compact(
                            'categories',
                            'trendyProduct',
                            'newProduct',
                            'vendors'
                            )
                    );
    }
}