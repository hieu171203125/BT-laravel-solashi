@extends('weblayout')
@section('content')
<?php 
if(Session::has('message')){
    $mes= Session::get('message');
    echo "<script type='text/javascript'>alert('$mes');</script>";
    Session::put('message',null);
}   
?>
<!-- Categorie Menu & Slider Area Start Here -->
<div class="main-page-banner pb-50 off-white-bg">
    <div class="container">
        <div class="row">
            <!-- Vertical Menu Start Here -->
            <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                <div class="vertical-menu mb-all-30">
                    <nav>
                        <ul class="vertical-menu-list">
                            <li class=""><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\1.png')}}" alt="menu-icon"></span>Automotive & Motorcycle<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                <ul class="ht-dropdown mega-child">
                                    <li><a href="shop.html">Office chair <i class="fa fa-angle-right"></i></a>
                                       <!-- category submenu end-->
                                       <ul class="ht-dropdown mega-child">
                                        <li><a href="shop.html">Bibendum Cursus</a></li>
                                        <li><a href="shop.html">Dignissim Turpis</a></li>
                                        <li><a href="shop.html">Dining room</a></li>
                                        <li><a href="shop.html">Dining room</a></li>
                                    </ul>
                                    <!-- category submenu end-->
                                </li>
                                <li><a href="shop.html">Purus Lacus <i class="fa fa-angle-right"></i></a>
                                   <!-- category submenu end-->
                                   <ul class="ht-dropdown mega-child">
                                    <li><a href="shop.html">Magna Pellentesq</a></li>
                                    <li><a href="shop.html">Molestie Tortor</a></li>
                                    <li><a href="shop.html">Vehicula Element</a></li>
                                    <li><a href="shop.html">Sagittis Blandit</a></li>
                                </ul>
                                <!-- category submenu end-->
                            </li>                                            
                            <li><a href="shop.html">Sagittis Eget</a></li>
                            <li><a href="shop.html">Sagittis Eget</a></li>
                        </ul>
                        <!-- category submenu end-->
                    </li>
                    <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\3.png')}}" alt="menu-icon"></span>Sports & Outdoors<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <!-- Vertical Mega-Menu Start -->
                        <ul class="ht-dropdown megamenu first-megamenu">
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Cameras</li>
                                    <li><a href="shop.html">Cords and Cables</a></li>
                                    <li><a href="shop.html">gps accessories</a></li>
                                    <li><a href="shop.html">Microphones</a></li>
                                    <li><a href="shop.html">Wireless Transmitters</a></li>
                                </ul>
                                <ul>
                                    <li class="menu-tile">GamePad</li>
                                    <li><a href="shop.html">real game hd</a></li>
                                    <li><a href="shop.html">fighting game</a></li>
                                    <li><a href="shop.html">racing pad</a></li>
                                    <li><a href="shop.html">puzzle pad</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Digital Cameras</li>
                                    <li><a href="shop.html">Camera one</a></li>
                                    <li><a href="shop.html">Camera two</a></li>
                                    <li><a href="shop.html">Camera three</a></li>
                                    <li><a href="shop.html">Camera four</a></li>
                                </ul>
                                <ul>
                                    <li class="menu-tile">Virtual Reality</li>
                                    <li><a href="shop.html">Reality one</a></li>
                                    <li><a href="shop.html">Reality two</a></li>
                                    <li><a href="shop.html">Reality three</a></li>
                                    <li><a href="shop.html">Reality four</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                            <!-- Single Megamenu Image Start -->
                            <li class="megamenu-img">
                                <a href="shop.html"><img src="{{asset('public/web/img\vertical-menu\sub-img1.jpg')}}" alt="menu-image"></a>
                                <a href="shop.html"><img src="{{asset('public/web/img\vertical-menu\sub-img2.jpg')}}" alt="menu-image"></a>
                                <a href="shop.html"><img src="{{asset('public/web/img\vertical-menu\sub-img3.jpg')}}" alt="menu-image"></a>
                            </li>
                            <!-- Single Megamenu Image End -->
                        </ul>
                        <!-- Vertical Mega-Menu End -->
                    </li>
                    <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\6.png')}}" alt="menu-icon"></span>Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <!-- Vertical Mega-Menu Start -->
                        <ul class="ht-dropdown megamenu megamenu-two">
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Men’s Fashion</li>
                                    <li><a href="shop.html">Blazers</a></li>
                                    <li><a href="shop.html">Boots</a></li>
                                    <li><a href="shop.html">pants</a></li>
                                    <li><a href="shop.html">Tops & Tees</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Women’s Fashion</li>
                                    <li><a href="shop.html">Bags</a></li>
                                    <li><a href="shop.html">Bottoms</a></li>
                                    <li><a href="shop.html">Shirts</a></li>
                                    <li><a href="shop.html">Tailored</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                        </ul>
                        <!-- Vertical Mega-Menu End -->
                    </li>
                    <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\7.png')}}" alt="menu-icon"></span>Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <!-- Vertical Mega-Menu Start -->
                        <ul class="ht-dropdown megamenu megamenu-two">
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Large Appliances</li>
                                    <li><a href="shop.html">Armchairs</a></li>
                                    <li><a href="shop.html">Bunk Bed</a></li>
                                    <li><a href="shop.html">Mattress</a></li>
                                    <li><a href="shop.html">Sideboard</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                            <!-- Single Column Start -->
                            <li class="single-megamenu">
                                <ul>
                                    <li class="menu-tile">Small Appliances</li>
                                    <li><a href="shop.html">Bootees Bags</a></li>
                                    <li><a href="shop.html">Jackets</a></li>
                                    <li><a href="shop.html">Shelf</a></li>
                                    <li><a href="shop.html">Shoes</a></li>
                                </ul>
                            </li>
                            <!-- Single Column End -->
                        </ul>
                        <!-- Vertical Mega-Menu End --> 
                    </li>
                    <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\4.png')}}" alt="menu-icon"></span>Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                    <!-- Vertical Mega-Menu Start -->
                    <ul class="ht-dropdown megamenu megamenu-two">
                        <!-- Single Column Start -->
                        <li class="single-megamenu">
                            <ul>
                                <li class="menu-tile">Tablet</li>
                                <li><a href="shop.html">tablet one</a></li>
                                <li><a href="shop.html">tablet two</a></li>
                                <li><a href="shop.html">tablet three</a></li>
                                <li><a href="shop.html">tablet four</a></li>
                            </ul>
                        </li>
                        <!-- Single Column End -->
                        <!-- Single Column Start -->
                        <li class="single-megamenu">
                            <ul>
                                <li class="menu-tile">Smartphone</li>
                                <li><a href="shop.html">phone one</a></li>
                                <li><a href="shop.html">phone two</a></li>
                                <li><a href="shop.html">phone three</a></li>
                                <li><a href="shop.html">phone four</a></li>
                            </ul>
                        </li>
                        <!-- Single Column End -->
                    </ul>
                    <!-- Vertical Mega-Menu End -->
                </li>
                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\6.png')}}" alt="menu-icon"></span>TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <!-- Vertical Mega-Menu Start -->
                    <ul class="ht-dropdown megamenu megamenu-two">
                        <!-- Single Column Start -->
                        <li class="single-megamenu">
                            <ul>
                                <li class="menu-tile">Gaming Desktops</li>
                                <li><a href="shop.html">Alpha Desktop</a></li>
                                <li><a href="shop.html">rober Desktop</a></li>
                                <li><a href="shop.html">Ultra Desktop </a></li>
                                <li><a href="shop.html">beta desktop</a></li>
                            </ul>
                        </li>
                        <!-- Single Column End -->
                        <!-- Single Column Start -->
                        <li class="single-megamenu">
                            <ul>
                                <li class="menu-tile">Women’s Fashion</li>
                                <li><a href="shop.html">3D-Capable</a></li>
                                <li><a href="shop.html">Clearance</a></li>
                                <li><a href="shop.html">Free Shipping Eligible</a></li>
                                <li><a href="shop.html">On Sale</a></li>
                            </ul>
                        </li>
                        <!-- Single Column End -->
                    </ul>
                    <!-- Vertical Mega-Menu End -->
                </li>
                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\5.png')}}" alt="menu-icon"></span>Beauty</a>
                </li>
                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\8.png')}}" alt="menu-icon"></span>Fruits & Veggies</a></li>
                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\9.png')}}" alt="menu-icon"></span>Computer & Laptop</a></li>
                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\10.png')}}" alt="menu-icon"></span>Meat & Seafood</a></li>
                <!-- More Categoies Start -->
                <li id="cate-toggle" class="category-menu v-cat-menu">
                    <ul>
                        <li class="has-sub"><a href="#">More Categories</a>
                            <ul class="category-sub">
                                <li><a href="shop.html"><span><img src="{{asset('public/web/img\vertical-menu\11.png')}}" alt="menu-icon"></span>Accessories</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- More Categoies End -->
            </ul>
        </nav>
    </div>
</div>
<!-- Vertical Menu End Here -->
<!-- Slider Area Start Here -->
<div class="col-xl-9 col-lg-8 slider_box">
    <div class="slider-wrapper theme-default">
        <!-- Slider Background  Image Start-->
        <div id="slider" class="nivoSlider">
            <a href="shop.html"><img class="imageslider" src="{{asset('public/web/img\slider\3.jpg')}}" data-thumb="img/slider/1.jpg')}}" alt="" title="#htmlcaption"></a>
            <a href="shop.html"><img class="imageslider"src="{{asset('public/web/img\slider\4.jpg')}}" data-thumb="img/slider/2.jpg')}}" alt="" title="#htmlcaption2"></a>
        </div>
        <!-- Slider Background  Image Start-->
    </div>
</div>
<!-- Slider Area End Here -->
</div>
<!-- Row End -->
</div>
<!-- Container End -->
</div>
<!-- Categorie Menu & Slider Area End Here -->
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
                    <?php foreach ($images as $key => $value_img): ?>
                    <?php if ($value_img->product_id==$value->id): ?>
                    <img class="primary-img" src="{{asset(''.$value_img->path)}}" alt="single-product">
                    <?php endif ?>   
                    <?php endforeach ?>
                </a>
                
                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
            </div>
            <!-- Product Image End -->
            <!-- Product Content Start -->
            <div class="pro-content">
                <div class="pro-info">
                    <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                    <p><span class="price">{{number_format($value->price)}}VND</span></p>
                </div>
                <div class="pro-actions">
                    <div class="actions-primary" >
                        <a href="{{Route('web.cart.addhome',['product_id'=>$value->id])}}" title="Add to Cart"> + Thêm vào giỏ hàng</a>
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
                        <a class="nav-link {{ $key == 0 ? 'active':''}}" data-toggle="tab" href="#{{$value_category->id}}">{{$value_category->name}}</a>
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
                                <a href="product.html">
                                    <?php foreach ($images as $key => $value_img): ?>
                                    <?php if ($value_img->product_id==$value->id): ?>
                                    <img class="primary-img" src="{{asset(''.$value_img->path)}}" alt="single-product">
                                    <?php endif ?>   
                                    <?php endforeach ?>
                                </a>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="product.html">{{$value->name}}</a></h4>
                                    <p><span class="price">{{$value->price}}</span></p>
                                </div>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="{{Route('web.cart.addhome',['product_id'=>$value->id])}}" title="Add to Cart"> + Thêm vào giỏ hàng</a>
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
                    <?php foreach ($images as $key => $value_img): ?>
                    <?php if ($value_img->product_id==$value->id): ?>
                    <img class="primary-img" src="{{asset(''.$value_img->path)}}" alt="single-product">
                    <?php endif ?>   
                    <?php endforeach ?>
                </a>
             
                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
            </div>
            <!-- Product Image End -->
            <!-- Product Content Start -->
            <div class="pro-content">
                <div class="pro-info">
                    <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                    <p><span class="price">{{number_format($value->price)}}VND</span></p>
                </div>
                <div class="pro-actions">
                    <div class="actions-primary" >
                        <a href="{{Route('web.cart.addhome',['product_id'=>$value->id])}}" title="Add to Cart"> + Thêm vào giỏ hàng</a>
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