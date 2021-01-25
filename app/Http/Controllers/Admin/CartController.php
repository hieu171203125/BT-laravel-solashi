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
        //
        $carts = Cart::all();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
