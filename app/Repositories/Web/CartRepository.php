<?php
namespace App\Repositories\Web;
use App\Product;
use App\Image;
use App\CartSession;
use App\Category;
use Session;
use App\Repositories\Web\CartInterface;
class CartRepository implements CartInterface{
    public function AddCartHome($product_id)
    {
        $product=Product::where('id',$product_id)->with('images')->first();
        if($product != null) 
        {
            $oldcart = Session('cart')?Session::get('cart'):null;
            $newcart = new CartSession($oldcart);
            $newcart->AddCart($product,$product_id,1);
            Session::put('cart',$newcart);
        }
    }
    public function AddCartDetail($product_id,$quantity){
        $product=Product::where('id',$product_id)->with('images')->first();
        if($product != null) 
        {
            $oldcart = Session('cart')?Session::get('cart'):null;
            $newcart = new CartSession($oldcart);
            $newcart->AddCart($product,$product_id,$quantity);
            Session::put('cart',$newcart);
        }
    }
    public function Update($product_id,$quantity)
    {
        $product=Product::where('id',$product_id)->with('images')->first();
        if($product != null) 
        {
        $oldcart = Session('cart')?Session::get('cart'):null;    
        $newcart = new CartSession($oldcart);
        $newcart->update_cart($product_id,$quantity);
        Session::put('cart',$newcart);
        }
    }
    public function Delete($product_id)
    {
        $oldcart = Session('cart')?Session::get('cart'):null;
        $newcart = new CartSession($oldcart);
        $newcart->delete_cart($product_id);
        Session::put('cart',$newcart);
    }



}