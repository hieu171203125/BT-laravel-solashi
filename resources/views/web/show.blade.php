@extends('weblayout')
@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li class="active"><a href="product.html">Products</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail ptb-100 ptb-sm-60">
    <div class="container">
        <div class="thumb-bg">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-lg-5 mb-all-40">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                        <?php foreach ($product['images'] as $key => $value_img): ?>
                        <div id="{{$value_img->id}}" class="tab-pane fade show {{$key==0?'active':''}}">
                            <a data-fancybox="images" href="{{asset('public/storage/'.$value_img->path)}}"><img
                                    src="{{asset('public/storage/'.$value_img->path)}}" alt="product-view"></a>
                        </div>
                        <?php endforeach ?>

                    </div>
                    <!-- Thumbnail Large Image End -->
                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail mt-15">
                        <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                            <?php foreach ($product['images'] as $key => $value_img): ?>
                            <a {{$key==0?'class="active"':''}} data-toggle="tab" href="#{{$value_img->id}}"><img
                                    src="{{asset('public/storage/'.$value_img->path)}}" alt="product-thumbnail"></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->
                <div class="col-lg-7">
                    <div class="thubnail-desc fix">
                        <h3 class="product-header">{{$product->name}}</h3>

                        <div class="pro-price mtb-30">
                            <p class="d-flex align-items-center"><span
                                    class="price">{{number_format($product->price)}}</span><span class="saving-price"
                                    {{$product->on_sale==0?'hidden':''}}>Sale
                                </span></p>
                        </div>
                        <p class="mb-20 pro-desc-details">{{$product->description}}</p>
                        <div class="product-size mb-20 clearfix">
                            <label>Size</label>
                            <select class="">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                            </select>
                        </div>
                        <div class="color clearfix mb-20">
                            <label>color</label>
                            <ul class="color-list">
                                <li>
                                    <a class="orange active" href="#"></a>
                                </li>
                                <li>
                                    <a class="paste" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box-quantity d-flex hot-product2">
                            <form action="#">
                                <input class="quantity mr-15" type="number" min="1" value="1">
                            </form>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="socila-sharing mt-25">
                            <ul class="d-flex">
                                <li>share</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail End -->
<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-100 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc nav tabs-area" role="tablist">
                    <li><a class="active" data-toggle="tab" href="#dtail">Product Details</a></li>
                </ul>
                <!-- Product Thumbnail Tab Content Start -->
                <div class="tab-content thumb-content border-default">
                    <div id="dtail" class="tab-pane fade show active">
                        <p>{{$product->description}}</p>
                    </div>
                </div>
                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->
<!-- Realted Products Start Here -->
<div class="hot-deal-products off-white-bg pt-100 pb-90 pt-sm-60 pb-sm-50">
    <div class="container">
        <!-- Product Title Start -->
        <div class="post-title pb-30">
            <h2>Realted Products</h2>
        </div>
        <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <?php foreach ($productcategory as $key => $value): ?>
            <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="{{Route('web.show',['product_id'=>$value->id])}}">
                        <img class="primary-img" src="{{asset('public/storage/'.$value['images'][0]->path)}}"
                            alt="single-product">
                    </a>

                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                        <p><span class="price">{{number_format($value->price)}}VND</p>

                    </div>
                    <div class="pro-actions">
                        <div class="actions-primary">
                            <a href="{{Route('web.cart.addhome',['product_id'=>$value->id])}}" title="Add to Cart"> +
                                Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                <!-- Product Content End -->
                <span class="sticker-sale" <?php echo $value->on_sale==0?'hidden':''; ?>>sale</span>

            </div>
            <!-- Single Product End -->
            <?php endforeach ?>
        </div>
        <!-- Hot Deal Product Active End -->

    </div>
    <!-- Container End -->
</div>
<!-- Realated Products End Here -->
@endsection