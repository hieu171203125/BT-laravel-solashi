@extends('weblayout')
@section('content')
<?php 
if(Session::has('message')){
    $mes= Session::get('message');
    echo "<script type='text/javascript'>alert('$mes');</script>";
    Session::put('message',null);
}   
?>

<!-- Hot Deal Products Start Here -->
<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
    <div class="container">
        <!-- Product Title Start -->
        <div class="post-title pb-30">
            <h2>Sản phẩm</h2>
        </div>
        <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <?php foreach ($products as $key => $value): ?>
            <!-- Single Product Start -->
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img">
                    <a href="{{Route('web.show',['product_id'=>$value->id])}}">
                        <img class="primary-img" src="{{asset('public/storage/'.$value['images']['0']->path)}}"
                            alt="single-product">

                    </a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                        <p><span class="price">{{number_format($value->price)}} VND</span></p>
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
<!-- Hot Deal Products End Here -->
<!-- Hot Deal Products End Here -->

<!-- Arrivals Products Area Start Here -->
<div class="second-arrivals-product pb-45 pb-sm-5">
    <div class="container">
        <div class="main-product-tab-area">
            <div class="tab-menu mb-20">
                <div class="section-ttitle">
                    <h2>Bán chạy nhất</h3>
                </div>
                <!-- Nav tabs -->
                <ul class="nav tabs-area" role="tablist">
                    <?php foreach ($category as $key => $value_category): ?>
                    <li class="nav-item ">
                        <a class="nav-link {{ $key == 0 ? 'active':''}}" data-toggle="tab"
                            href="#{{$value_category->id}}">{{$value_category->name}}</a>
                    </li>
                    <?php endforeach ?>
                </ul>

            </div>
            <!-- Tab Contetn Start -->
            <div class="tab-content">
                <?php 
                foreach ($category as $key => $value_category): ?>
                <div id="{{$value_category->id}}" class="tab-pane fade {{$key==0?'show active':''}}">
                    <!-- Arrivals Product Activation Start Here -->

                    <div class="best-seller-pro-active owl-carousel">
                        <?php foreach ($productsontop as $key => $value): ?>
                        <!-- Single Product Start -->
                        <?php if ($value_category->id==$value->category_id): ?>


                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="{{Route('web.show',['product_id'=>$value->id])}}">

                                    <img class="primary-img"
                                        src="{{asset('public/storage/'.$value['images'][0]->path)}}"
                                        alt="single-product">

                                </a>

                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="product.html">{{$value->name}}</a></h4>
                                    <p><span class="price">{{$value->price}} VND</span></p>
                                </div>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="{{Route('web.cart.addhome',['product_id'=>$value->id])}}"
                                            title="Add to Cart"> + Thêm vào giỏ hàng</a>
                                    </div>

                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <!-- Single Product End -->
                        <?php endif ?>
                        <?php endforeach ?>

                    </div>
                    <!-- Arrivals Product Activation End Here -->
                </div>
                <?php endforeach ?>
                <!-- #fshion End Here -->
                <!-- #electronics End Here -->
            </div>
            <!-- Tab Content End -->
        </div>
        <!-- main-product-tab-area-->
    </div>
    <!-- Container End -->
</div>
<!-- Arrivals Products Area End Here -->
<!-- Like Products Area Start Here -->
<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
    <div class="container">
        <!-- Product Title Start -->
        <div class="post-title pb-30">
            <h2>Hot Sale</h2>
        </div>
        <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            <?php foreach ($products as $key => $value): ?>
            <?php if ($value->on_sale==1): ?>
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
                        <p><span class="price">{{number_format($value->price)}} VND</span></p>
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
            <?php endif ?>
            <?php endforeach ?>
        </div>
        <!-- Lile Products Area End Here -->
        @endsection