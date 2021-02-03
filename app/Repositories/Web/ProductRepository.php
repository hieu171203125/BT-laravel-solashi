<?php
namespace App\Repositories\Web;
use App\Product;
use App\Image;
use App\Category;
use App\Repositories\Web\BaseRepository;
class ProductRepository implements BaseRepository{
    
    //tất cả sản phẩm
    public function All(){
        Return Product::with('images')->with('categoris')->orderby('created_at','desc')->get();
    }
    public function New(){
        Return Product::with('images')->with('categoris')->orderby('created_at','desc')->take(7)->get();
    }
    //sản phẩm bán chạy
    public function OnTop(){
        return Product::where('is_top',1)->with('images')->get();
    }
    //sản phẩm theo id
    public function Find($id){
        return Product::with('images')->where('id',$id)->first();
    }
    //sản phẩm liên quan
    public function Relate($id){
        $product = Product::with('images')->where('id',$id)->first();
        $productcategory = Product::where('category_id',$product->category_id)->with('images')->get();
        return $productcategory;
    }
    //Sản phảm tìm kiếm 
    public function Search($key)
    {
        Return Product::where('name','like','%'.$key.'%')->orwhere('code','like', '%'.$key.'%')->with('images')->get();
    }
    //Sản phẩm theo danh mục 
    public function ByCategory($category_id){
        Return Product::with('categoris')->with('images')->where('category_id',$category_id)->get();
    }
}

?>

