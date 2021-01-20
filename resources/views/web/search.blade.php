@extends('weblayout')
@section('content')
<div class="like-product ptb-95 ptb-sm-55 off-white-bg">
	<div class="container">
		<div class="like-product-area"> 
			<h2 class="section-ttitle2 mb-30"> Kết quả tìm kiếm của từ khóa : {{$key}} </h2>
			<!-- Like Product Activation Start Here -->
			<div class="like-pro-active owl-carousel">
				<?php foreach ($products as $key => $value): ?>
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="{{Route('web.show',['product_id'=>$value->id])}}">
                                    <img class="primary-img" src="{{asset(''.$value['images'][0]->path)}}" alt="single-product">
                                </a>
                                <div class="countdown" data-countdown="2020/03/01"></div>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href="{{Route('web.show',['product_id'=>$value->id])}}">{{$value->name}}</a></h4>
                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
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
			<!-- Like Product Activation End Here -->
		</div>
		<!-- main-product-tab-area-->
	</div>
	<!-- Container End -->
</div>
@endsection