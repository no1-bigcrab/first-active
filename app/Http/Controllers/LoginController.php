<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Validator;
use Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login.index');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
            $user = User::where("email", $request->email)->first();
        

        switch ($variable) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        if (!$user && Hash::check($request->password, $user->password)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login')->withErrors("Email or password fail!")
                ->withInput();
        }
    }
}
