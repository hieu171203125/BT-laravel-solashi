<?php
namespace App\Repositories\Admin;
use App\Product;
use App\Image;
use App\Category;
use App\Repositories\Web\BaseRepository;
class AdminProductRepository implements AdminProductInterface {
    public $ProductRepository;
    public function __construct(BaseRepository $repository ){
        $this->ProductRepository = $repository; 
    }
    //Lấy tất cả sản phẩm
    public function All(){
        Return Product::with('images')->with('categoris')->get();
    }
    //Lấy sản phẩm theo id
    public function Find($id){
        Return Product::where('id',$id)->with('categoris')->with('images')->first();
    }
    public function Update($id){
        Return $this->ProductRepository->all();
    }
    public function Destroy($id){
        Return Product::find($id)->delete();
    }
    public function Search($key)
    {
        Return Product::where('name','like','%'.$key.'%')->orwhere('code','like', '%'.$key.'%')->with('images')->get();
    }
}
?>

