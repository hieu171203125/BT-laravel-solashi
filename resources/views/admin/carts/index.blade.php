@extends('adminlayout')
@section('content')
<div class="content">
    <?php if (Session::has('message')) {
    $mes = Session::get('message');
    echo "<script type='text/javascript'>
        alert('$mes');

    </script>";
    Session::put('message', null);
    } ?>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Danh sách đơn hàng</h4>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Đơn hàng</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Mã khách hàng</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $key => $value)
                                    <tr>
                                        <td>
                                            <div>
                                                {{$value->id}}
                                            </div>
                                        </td>
                                        <td>{{$value->user_id}}</td>
                                        <td>{{$value->product_id}}</td>
                                        <td>{{$value->quantity}}</td>
                                        <td>{{$value->status==0?'Chưa nhận hàng':'đã nhận hàng'}}</td>
                                        <td>
                                            <div class="editable-buttons">
                                                @if ($value->status==0)
                                                <a href="{{ route('admin.cart.check', ['id' => $value->id]) }}">
                                                    <button type="submit"
                                                        class="btn btn-primary editable-submit btn-sm waves-effect waves-light">
                                                        <i class="mdi mdi-check-bold"></i>
                                                    </button>
                                                </a>
                                                @else
                                                <a href="{{ route('admin.cart.check', ['id' => $value->id]) }}">
                                                    <button type="submit"
                                                        class="btn btn-dark editable-submit btn-sm waves-effect waves-light">
                                                        <i class="fas fa-chevron-circle-up"></i>
                                                    </button>
                                                </a>
                                                @endif

                                                <a href="{{ route('admin.cart.destroy', ['id' => $value->id]) }}">
                                                    <button type="button"
                                                        class="btn btn-danger editable-cancel btn-sm waves-effect">
                                                        <i class="mdi mdi-close"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('admin.cart.show', ['id' => $value->id]) }}">
                                                    <button type="button"
                                                        class="btn btn-success editable-cancel btn-sm waves-effect">
                                                        <i class="ion ion-md-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--- end row -->



    </div>
    <!-- end container-fluid -->

</div>
@endsection