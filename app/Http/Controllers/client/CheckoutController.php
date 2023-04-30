<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $categories = Category::whereNull('parent_id')->with('parent', 'product')->get();
        return view('client.checkout.index', compact('categories'));
    }
}
