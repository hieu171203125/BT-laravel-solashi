@extends('adminlayout')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thông tin sản phẩm</h4>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng tồn</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td style="white-space: nowrap; width: 1%;">
                                            <div class="editable-buttons">
                                                <a
                                                    href="{{ route('admin.product.edit', ['product_id' => $product->id]) }}">
                                                    <button type="submit"
                                                        class="btn btn-primary editable-submit btn-sm waves-effect waves-light">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="{{ route('admin.product.destroy', ['product_id' => $product->id]) }}">
                                                    <button type="button"
                                                        class="btn btn-danger editable-cancel btn-sm waves-effect">
                                                        <i class="mdi mdi-close"></i>
                                                    </button>
                                                </a>

                                            </div>

                                        </td>
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
                        <h4 class="header-title mb-4">Mô tả</h4>

                        <div class="table-responsive">
                            <table class="table table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th>Mô tả</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$product->description}}</td>
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
                        <h4 class="header-title mb-4">Ảnh</h4>
                        <div class="table-responsive">
                            @foreach ($product->images as $key => $value)
                            <div id="div_top_hypers">
                                <ul id="ul_top_hypers">

                                    <li><img id="img-show" src="{{asset('public/storage/'.$value->path)}}" alt=""></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
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