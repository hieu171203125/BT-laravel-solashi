@extends('weblayout')
@section('content')
<?php 
if(Session::has('message')){
    $mes= Session::get('message');
    echo "<script type='text/javascript'>alert('$mes');</script>";
    Session::put('message',null);
}   
?>

<div class="breadcrumb-area mt-30">
	<div class="container">
		<div class="breadcrumb">
			<ul class="d-flex align-items-center">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="cart.html">Cart</a></li>
			</ul>
		</div>
	</div>
	<!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Cart Main Area Start -->
@if(Session::has('cart') == false||count(session::get('cart')->list) ==0)
<div class="cart-main-area ptb-100 ptb-sm-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>
			</div>
		</div>
	</div>
</div>
@else
<div class="cart-main-area ptb-100 ptb-sm-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<!-- Form Start -->
				<form action="{{route('web.cart.update')}}" method="POST">
					@csrf
					<!-- Table Content Start -->
					<div class="table-content table-responsive mb-45">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Image</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
								@if(Session::has('cart'))
								@foreach(Session::get('cart')->list as $key => $value)
								<tr>
									<td class="product-thumbnail">
										<a href="#"><img
												src="{{asset('public/storage/'.$value['info']['images'][0]->path)}}"
												alt="cart-image"></a>
									</td>
									<td class="product-name"><a href="#">{{$value['info']->name}}</a>
									</td>
									<td class="product-price"><span class="amount">{{$value['info']->price}}</span></td>
									<td class="product-quantity"><input type="number" name="quantity[{{$key}}]"
											value="{{$value['quantity']}}">
									</td>
									<td class="product-subtotal">{{$value['total']}}</td>
									<td class="product-remove"> <a
											href="{{route('web.cart.delete',['product_id'=>$key])}}"><i
												class="fa fa-times" aria-hidden="true"></i></a></td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<!-- Table Content Start -->
					<div class="row">
						<!-- Cart Button Start -->
						<div class="col-md-8 col-sm-12">
							<div class="buttons-cart">
								<input type="submit" value="Cập nhật giỏ hàng">
								<a href="{{route('web.index')}}">Tiếp tục mua hàng</a>
							</div>
						</div>
						<!-- Cart Button Start -->
						<!-- Cart Totals Start -->
						<div class="col-md-4 col-sm-12">
							<div class="cart_totals float-md-right text-md-right">
								<h2>Cart Totals</h2>
								<br>
								<table class="float-md-right">
									<tbody>

										<tr class="order-total">
											<th>Total</th>
											<td>
												<strong><span
														class="amount">{{Session::get('cart')->totalPrice}}</span></strong>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="wc-proceed-to-checkout">
									<a href="{{Route('web.cart.checkout')}}">Thanh toán</a>
								</div>
							</div>
						</div>
						<!-- Cart Totals End -->
					</div>
					<!-- Row End -->
				</form>
				<!-- Form End -->
			</div>
		</div>
		<!-- Row End -->
	</div>
</div>
@endif
<!-- Cart Main Area End -->
@endsection