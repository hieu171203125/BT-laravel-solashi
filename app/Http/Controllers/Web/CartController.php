<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CartSession;
use App\Product;
use App\Cart;
use Session;
use Auth;
use App\Repositories\Web\CartInterface;
session_start();
class CartController extends Controller
{
    private $CartRepository;
    public function __construct(CartInterface $CartInterface){
        $this->CartRepository = $CartInterface;
    }
    public function index()
    {
        return view('web.cart');
    }
    public function addCarthome($product_id) {
        $this->CartRepository->addCarthome($product_id);
        Session::put('message','Sản phẩm đã được thêm vào giỏ hàng');
        return redirect()->route('web.index');
    }
    public function cartdetail($product_id,Request $request){
        $this->CartRepository->addCartDetail($product_id,$request->quantity);
        Session::put('message','Sản phẩm đã được thêm vào giỏ hàng');
        return redirect()->route('web.index');
    }
    public function updateCart(Request $request) {
    //Mỗi quantity sẽ có key = id sản phẩm đã gửi như trang cart.blade.php,$key = id,$value = quantity
      foreach($request->quantity as $key => $value) 
        {      
             $this->CartRepository->update($key,$value);
        }
        Session::put('message','Cập nhật giỏ hàng thành công');
        return redirect()->route('web.cart');
    } 
    
    public function deleteCart($product_id){
            $this->CartRepository->Delete($product_id);
            Session::put('message','Đã xóa sản phẩm khỏi giỏ hàng');
            return redirect()->route('web.cart');
    }
    public function checkout(){
        // $products = Session::get('cart')->list; 
        // foreach($products as $key => $value){
        //     Cart::create([
        //         'user_id'=> Auth::user()->id,
        //         'product_id'=>$key,
        //         'quantity'=>$value['quantity'],
        //         'status'=>0
        //     ]);
        // }
        // Session::put('cart',null); 
        // Session::put('message','Đã gửi đơn đặt hàng');
        // return redirect()->route('web.index');
        return view('web.checkout');
    }
    public function confirm(Request $request)
    {
        $products = Session::get('cart')->list; 
        foreach($products as $key => $value){
            Cart::create([
                'user_id'=> Auth::user()->id,
                'product_id'=>$key,
                'quantity'=>$value['quantity'],
                'status'=>0,
                'address' =>$request->address,
                'notes' => $request->note,
            ]);
        }
        Session::put('cart',null); 
        Session::put('message','Đã gửi đơn đặt hàng');
        return redirect()->route('web.index');
    }
}
?>