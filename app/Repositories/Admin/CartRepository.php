<?php
namespace App\Repositories\Admin;
use App\Product;
use App\Image;
use App\Cart;
use App\Category;
use App\Repositories\Web\BaseRepository;
class CartRepository implements CartRepository {
    public $ProductRepository;
    public function __construct(BaseRepository $repository ){
        $this->ProductRepository = $repository; 
    }
    public function All(){
        Return $this->ProductRepository->all();
    }
    public function Search($key)
    {
        Return Cart::where('id','like', '%'.$key.'%')->with('users')->with('products')->get();
    }

}
?>

