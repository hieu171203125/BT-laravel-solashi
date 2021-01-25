@extends('weblayout')
@section('content')
<!-- Breadcrumb Start -->

<?php 
if(Session::has('message')){
	$mes= Session::get('message');
	echo "<script type='text/javascript'>alert('$mes');</script>";
	Session::put('message',null);
}	
?>
<script type="text/javascript"></script>
<div class="breadcrumb-area mt-30">
	<div class="container">
		<div class="breadcrumb">
			<ul class="d-flex align-items-center">
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="register.html">Register</a></li>
			</ul>
		</div>
	</div>
	<!-- Container End -->
</div>
<!-- Breadcrumb End -->
<!-- Register Account Start -->
<div class="register-account ptb-100 ptb-sm-60">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="register-title">
					<h3 class="mb-10">REGISTER ACCOUNT</h3>
					@if(count($errors)>0)
					<ul>
						@foreach($errors->all() as $key => $value)
						<li class="alert alert-danger"><strong>{{$value}}</strong></li>
						@endforeach
					</ul>
					@endif
					<p class="mb-10">If you already have an account with us, please login at the login page.</p>
				</div>
			</div>
		</div>
		<!-- Row End -->
		<div class="row">
			<div class="col-sm-12">
				<form class="form-register" action="{{Route('web.store')}}" method="POST">
					@csrf
					<fieldset>
						<legend>Your Personal Details</legend>

						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="l-name"><span
									class="require">*</span>Name</label>
							<div class="col-md-10">
								<input type="text" class="form-control" id="l-name" placeholder="Last Name" name="name">
							</div>
						</div>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="email"><span
									class="require">*</span>Email</label>
							<div class="col-md-10">
								<input type="email" class="form-control" id="email"
									placeholder="Enter you email address here..." required name="email">
							</div>
						</div>

					</fieldset>
					<fieldset>
						<legend>Your Password</legend>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="pwd"><span
									class="require">*</span>Password:</label>
							<div class="col-md-10">
								<input type="password" class="form-control" id="pwd" placeholder="Password" required
									name="password">
							</div>
						</div>
						<div class="form-group d-md-flex align-items-md-center">
							<label class="control-label col-md-2" for="pwd-confirm"><span
									class="require">*</span>Confirm Password</label>
							<div class="col-md-10">
								<input type="password" class="form-control" id="pwd-confirm"
									placeholder="Confirm password" required>
							</div>
						</div>
					</fieldset>
					<div class="terms">
						<div class="float-md-right">
							<span><b>Xác nhận điều khoản</b></a></span>
							<input type="checkbox" id="mycheck" name="agree" value="1" required> &nbsp;
							<input type="submit" value="Đăng kí" class="return-customer-btn" id="button-check">
						</div>
					</div>

				</form>
			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</div>
<!-- Register Account End -->
@endsection