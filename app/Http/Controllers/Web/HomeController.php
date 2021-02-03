<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Images;
use DB;
use Session;
use Illuminate\Support\Str;
use App\Repositories\Web\BaseRepository;
session_start();
class HomeController extends Controller
{
    private $ProductRepository;

    public function __construct(BaseRepository $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->ProductRepository->All();
        $productnew = $this->ProductRepository->new();
        $productsontop = $this->ProductRepository->OnTop();
        $category = Category::all();
        Session::put('category',$category);
        return view('web.home',compact('products','category','productsontop','productnew'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->ProductRepository->Find($id);
        $productcategory = $this->ProductRepository->Relate($id);
        return view('web.show',compact('product','productcategory'));
    }

    public function search(Request $request){
        $key = $request->key;
        $products= $this->ProductRepository->Search($key);
        return view('web.search',compact('products','key'));
        
    }
    public function showcategory($category_id)
    {   
        $products =  $this->ProductRepository->ByCategory($category_id);
        return view('web.category',compact('products'));
    }
    public function contact()
    {
        return view('web.contact');
    }
    
    
}
