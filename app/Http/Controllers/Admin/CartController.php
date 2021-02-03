<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::orderby('id','desc')->get();
        return view('admin.carts.index',compact('carts'));
    }
    public function check($id){
        $cart = Cart::find($id)->first();
        if($cart->status==0){
            $cart->status = 1;
            $cart->save();
            Session::put('message','Cập nhật đơn hàng thành công');
            return redirect()->route('admin.cart.index');
        } else {
            $cart->status=0;
            $cart->save();
            Session::put('message','Cập nhật đơn hàng thành công');
            return redirect()->route('admin.cart.index');
        }
    }
    public function destroy($id)
    {
        Cart::find($id)->delete();
        Session::put('message','Xóa đơn hàng thành công');
        return redirect()->route('admin.cart.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::with('users')->with('products')->find($id);
        return view('admin.carts.show',compact('cart'));
    }   
    public function showcheck($status)
    {
        $carts = Cart::where('status',$status)->get();
        $status = $carts[0]->status;
        return view('admin.carts.index',compact('carts','status'));
    }
}