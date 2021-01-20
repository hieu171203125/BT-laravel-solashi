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
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="register.html">account</a></li>
                        <li class="active"><a href="contact.html">contact us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- LogIn Page Start -->
        <div class="log-in ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- New Customer Start -->
                    <div class="col-md-6">
                        <div class="well mb-sm-30">
                            <div class="new-customer">
                                <h3 class="custom-title">new customer</h3>
                                <p class="mtb-10"><strong>Register</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                                <a class="customer-btn" href="{{Route('web.signup')}}">continue</a>
                            </div>
                        </div>
                    </div>
                    <!-- New Customer End -->
                    <!-- Returning Customer Start -->
                    <div class="col-md-6">
                        <div class="well">
                            <div class="return-customer">
                                <h3 class="mb-10 custom-title">returnng customer</h3>
                                <p class="mb-10"><strong>I am a returning customer</strong></p>
                                <form action="{{Route('web.login')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text"  placeholder="Enter your email address..." id="input-email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password"  placeholder="Password" id="input-password" class="form-control" name="password">
                                    </div>
                                    <p class="lost-password"><a href="forgot-password.html">Quên mật khẩu?</a></p>
                                    <input type="submit" value="Đăng nhập" class="return-customer-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Returning Customer End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- LogIn Page End -->
@endsection