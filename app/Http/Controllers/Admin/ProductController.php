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
use App\Cart;
use Session;
session_start();
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\Admin\AdminProductInterface;
use App\Repositories\Admin\AdminProductRepository;

class ProductController extends Controller
{
    private $AdminProductRepository;
    public function __construct(AdminProductInterface $AdminProductInterface){
        $this->AdminProductRepository = $AdminProductInterface;
    }

    public function index()
    {
        $products = $this->AdminProductRepository->All();
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {   
        $category = Category::all();
        return view('admin.products.create',compact('category'));
    }
    public function store(ProductRequest $request)
    {    
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
    public function show($id)
    {
        $product = $this->AdminProductRepository->Find($id);
        Return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->AdminProductRepository->Find($id);
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
        
        $product = $this->AdminProductRepository->Find($id);
        $product->fill($request->all());
        $product->save();
        $image = $product->images;
        if($request->hasFile('image')){  
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
        $product = $this->AdminProductRepository->Find($id);
        $image = $product->images;
        foreach($image as $key => $value) {  
                unlink(public_path('storage/'.$value->path));
                Images::where('product_id',$id)->delete();
            }
        $this->AdminProductRepository->Destroy($id);
        Session::put('message','Xóa sản phẩm thành công');
        return redirect()->route('admin.product.index');
        } catch (\Throwable $th) {
            Session::put('message','Xóa sản phẩm không thành công');
            return redirect()->route('admin.product.index');
        }
    }
    public function remove_img($id)
    {
        try {
        $img = Images::Find($id);
        unlink(public_path('storage/'.$img->path));
        Images::where('id',$id)->delete();
        Session::put('message','Đã xóa ảnh thành công');
        Return redirect()->back();
        } catch (\Throwable $th) {
            Session::put('message','Đã xóa ảnh không thành công');
        Return redirect()->back();
        }
    }
    public function search(Request $request)        
    {
        if($request->select==1){
        $key = $request->key;
        $products= $this->AdminProductRepository->Search($key);
        return view('admin.products.index',compact('products','key'));
        } else {
            $key = $request->key;
        $carts = Cart::where('id','like','%'.$key.'%')->with('users')->with('products')->get();
        return view('admin.carts.index',compact('carts','key'));
        }
    }
}
