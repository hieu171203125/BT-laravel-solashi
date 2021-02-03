@extends('adminlayout')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thông tin đơn hàng</h4>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Thông tin sản phẩm</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$cart['products']->code}}</td>
                                        <td>{{$cart['products']->name}}</td>
                                        <td>{{$cart['products']->price}}</td>
                                        <td>{{$cart->quantity}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Thông tin khách hàng</h4>
                        <div class="table-responsive">
                            <table class="table table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th>Mã khách</th>
                                        <th>Tên khách </th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$cart['users']->id}}</td>
                                        <td>{{$cart['users']->name}}</td>
                                        <td>{{$cart['users']->email}}</td>
                                        <td>{{$cart['users']->phone}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Thông tin đơn hàng</h4>
                        <div class="table-responsive">
                            <table class="table table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th>Địa chỉ nhận hàng</th>
                                        <th>Ghi chú </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>{{$cart->address}}</td>
                                        <td>{{$cart->notes}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center">Trạng thái : {{$cart->status==0?'Chưa nhận hàng':'Đã nhận hàng'}}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!--- end row -->



    </div>
    <!-- end container-fluid -->

</div>
<!-- end content -->
@endsection