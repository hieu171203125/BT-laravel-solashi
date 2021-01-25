<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Product;
use App\Cart;
session_start();
class AdminController extends Controller
{
    //
    public function index()
    {
        $carts = Cart::all();
        $products = Product::all();
        return view('admin.home',compact('carts','products'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function checklogin(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user)) {
            return redirect()->route('admin.home');
        } else {
            Session::put('message', 'Email hoặc mật khẩu không chính xác');
            return redirect()->route('admin.login');
        }
        return redirect()->route('admin.home');
    }
    public function logout()
    {

        Auth::logout();
        return redirect()->route('admin.login');
    }
}
