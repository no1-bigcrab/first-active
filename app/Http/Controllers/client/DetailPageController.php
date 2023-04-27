<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailPageController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        $categories = Category::whereNull('parent_id')->with('parent', 'product')->get();

        return view('client.detail.index',
                        compact(
                            'categories',
                            'product'
                            
                            )
                    );

    }
}
