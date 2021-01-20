<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CartSession;
use App\Product;
use Session;
session_start();
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.cart');
    }
    public function addCarthome($product_id) {
        $product=Product::where('id',$product_id)->with('images')->first();
        if($product != null) 
        {
            $oldcart = Session('cart')?Session::get('cart'):null;
            $newcart = new CartSession($oldcart);
            $newcart->AddCart($product,$product_id,1);
            Session::put('cart',$newcart);
        }

        Session::put('message','Sản phẩm đã được thêm vào giỏ hàng');
        return redirect()->route('web.index');
    }
    public function addcartdetails(){

    }
    public function updateCart(Request $request) {
      foreach($request->quantity as $key => $value) 
        {
        $oldcart = Session('cart')?Session::get('cart'):null;    
        $newcart = new CartSession($oldcart);
        $newcart->update_cart($key,$value);
        Session::put('cart',$newcart);
        }
        Session::put('message','Cập nhật giỏ hàng thành công');
        return redirect()->route('web.cart');
    } 
    public function deleteCart($product_id){
            $oldcart = Session('cart')?Session::get('cart'):null;
            $newcart = new CartSession($oldcart);
            $newcart->delete_cart($product_id);
            Session::put('cart',$newcart);
            Session::put('message','Đã xóa sản phẩm khỏi giỏ hàng');
            return redirect()->route('web.cart');
    }
}
?>