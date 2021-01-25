<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Images;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Session;
session_start();
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('images')->with('categoris')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::all();
        return view('admin.products.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        $this->validate(
            $request,
            [
                'name' => 'required',
                'code' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'is_top' => 'required',
                'on_sale' => 'required',
                'image' => 'required'
            ]
        );
        try{
        $product = Product::create($request->all());
        if ($request->hasFile('image')) {
            $data = $request->image;
            foreach ($data as $key => $value) {
                $path = $value->store('products','public');
                $image = Images::create(
                    [
                        'path' => $path,
                        'product_id' => $product->id
                    ]
                );
            }

        }
         Session::put('message','Thêm sản phẩm thành công');
        return redirect()->route('admin.product.index');
        } catch (exception $e) {
            Session::put('message','Thêm sản phẩm không thành công');
        return redirect()->route('admin.product.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->with('categoris')->with('images')->first();
        $category = Category::all();
        return view('admin.products.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,UpdateProductRequest $request)
    {
        
        $product = Product::where('id',$id)->with('images')->first();
        $product->fill($request->all());
        $product->save();
        $image = $product->images;
        if($request->hasFile('image')){  
            foreach($image as $key => $value) {  
                unlink(public_path('storage/'.$value->path));
                Images::where('product_id',$id)->delete();
            }
            $data = $request->image;
            foreach ($data as $key => $value) {
                $path = $value->store('products','public');
                $image = Images::create(
                    [
                        'path' => $path,
                        'product_id' => $product->id
                    ]
                );
            }  
            Session::put('message','Cập nhật sản phẩm thành công');
            return redirect()->route('admin.product.index');   
        } else {
        Session::put('message','Cập nhật sản phẩm thành công');
        return redirect()->route('admin.product.index'); 
        }           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
        $product = Product::where('id',$id)->with('images')->first();
        $image = $product->images;
        foreach($image as $key => $value) {  
                unlink(public_path('storage/'.$value->path));
                Images::where('product_id',$id)->delete();
            }
        Product::find($id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return redirect()->route('admin.product.index');
        } catch (\Throwable $th) {
            Session::put('message','Xóa sản phẩm không thành công');
            return redirect()->route('admin.product.index');
        }
    }
}
