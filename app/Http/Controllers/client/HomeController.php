<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::whereNull('parent_id')->with('parent')->get();
        return view('client.home.index',
                        compact('categories')
                    );
    }
}