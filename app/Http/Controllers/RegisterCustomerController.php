<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\auth\RegisterCustomerRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class RegisterCustomerController extends Controller
{
     public function register(){
        return view('auth.register.index');
    }

    public function postRegister(RegisterCustomerRequest $request){
        $validated = $request->validated();
        $customer = Customer::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'address_1'=>'',
            'address_2'=>'',
            'country'=>'',
            'state'=>'',
            'zip_code'=>'',
            'phone'=>'',
            'status'=>'3',
            'password' => Hash::make($request['password'])
        ]);
        return redirect('/');
    }
}
