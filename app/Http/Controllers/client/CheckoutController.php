<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutOrderRequest;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use Validator;

class CheckoutController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('parent', 'product')->get();
        return view('client.checkout.index', compact('categories'));
    }

    public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'email' => 'email:rfc,dns',
            'phone' => 'required|numeric|min:10',
            'address_1' => 'required',
            'address_2' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/checkout')
                ->withErrors($validator)
                ->withInput();
        }
            $customer = new Customer();
            $customer->name = $request->first_name." ".$request->last_name;
            $customer->address_1 = $request->address_1;
            $customer->address_2 = $request->address_2;
            $customer->country = $request->country;
            $customer->city = $request->city;
            $customer->zip_code = $request->zip_code;
            dd($customer);
            // $oder = new Order();
            // $order_detail = new Order_detail();
    }
}