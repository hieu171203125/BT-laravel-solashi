@extends('adminlayout')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Welcome !</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                            <li class="breadcrumb-item active"><a href="#">Trang quản trị</a></li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <a href="{{Route('admin.product.index')}}">
                    <div class="card bg-pink">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span
                                            data-plugin="counterup">{{count($products)}}</span>
                                    </h2>
                                    <p class="mb-0">Sản phẩm</p>
                                </div>
                                <i class="ion-md-eye"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6">
                <a href="{{Route('admin.cart.index')}}">
                    <div class="card bg-purple">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">{{count($carts)}}</span>
                                    </h2>
                                    <p class="mb-0">Đơn hàng</p>
                                </div>
                                <i class="ion-md-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-sm-6">
                <a href="{{Route('admin.cart.showcheck',['status'=>$cartsend[0]->status])}}">
                    <div class="card bg-primary">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span
                                            data-plugin="counterup">{{count($cartsend)}}</span>
                                    </h2>
                                    <p class="mb-0">Đơn hàng đã nhận</p>
                                </div>
                                <i class="ion-md-checkmark"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-sm-6">
                <a href="{{Route('admin.cart.showcheck',['status'=>$cartnosend[0]->status])}}">
                    <div class="card bg-danger">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span
                                            data-plugin="counterup">{{count($cartnosend)}}</span>
                                    </h2>
                                    <p class="mb-0">Đơn hàng chưa nhận</p>
                                </div>
                                <i class="ion-ios-close-circle  "></i>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- end container-fluid -->

</div>
@endsection