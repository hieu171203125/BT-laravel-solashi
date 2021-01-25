<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Images;
use DB;
use Session;
session_start();
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('images')->with('categoris')->get();
        $productsontop = Product::where('is_top',1)->with('images')->get();
        $category = Category::all();
        Session::put('category',$category);
        return view('web.home',compact('products','category','productsontop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('images')->where('id',$id)->first();
        $productcategory = Product::where('category_id',$product->category_id)->with('images')->get();
        return view('web.show',compact('product','productcategory'));
    }

    public function search(Request $request){
        $key = $request->key;
        $products= Product::where('name','like','%'.$request->key.'%')->orwhere('price','like', '%'.$request->key.'%')->with('images')->get();
        return view('web.search',compact('products','key'));
        
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
    public function destroy($id)
    {
        //
    }
    public function showcategory($id)
    {
        $category = Category::find($id);
        $products = Product::with('categoris')->with('images')->where('category_id',$id)->get();
        return view('web.category',compact('category','products'));
    }
    
    
}
