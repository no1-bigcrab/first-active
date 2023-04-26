<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ShopPageController extends Controller
{
    public function index(){
        $categories = Category::whereNull('parent_id')->with('parent')->get();
        $products = Product::paginate(9);
        //dd($categories);
        //dd($products);
        return view('client.shop.index', 
                    compact(
                        'categories',
                        'products'
                        )
                );
    }
}
