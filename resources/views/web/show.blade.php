@extends('weblayout')
@section('content')
<div class="main-page-banner home-3">
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
    <!-- Container End -->           
</div>
</div>
</div>
</div>

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
                         <a data-fancybox="images" href="{{asset(''.$value_img->path)}}"><img src="{{asset(''.$value_img->path)}}" alt="product-view"></a>
                     </div>
                     <?php endforeach ?>

                 </div>
                 <!-- Thumbnail Large Image End -->
                 <!-- Thumbnail Image End -->
                 <div class="product-thumbnail mt-15">
                  <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                     <?php foreach ($product['images'] as $key => $value_img): ?>
                     <a {{$key==0?'class="active"':''}} data-toggle="tab" href="#{{$value_img->id}}"><img src="{{asset(''.$value_img->path)}}" alt="product-thumbnail"></a>
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
                 <p class="d-flex align-items-center"><span class="price">{{number_format($product->price)}}</span><span class="saving-price" {{$product->on_sale==0?'hidden':''}}>Sale
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
                        <img class="primary-img" src="{{asset(''.$value['images'][0]->path)}}" alt="single-product">
                    </a>
                    
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                        <p><span class="price">{{number_format($value->price)}}VND</p>
                            
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
    <!-- Realated Products End Here -->
    @endsection