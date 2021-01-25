@extends('adminlayout')
@section('content')
<?php if (Session::has('message')) {
    $mes = Session::get('message');
    echo "<script type='text/javascript'>
        alert('$mes');

    </script>";
    Session::put('message', null);
    } ?>
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Basic Tables</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Basic Tables</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Basic example</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Mô tả</th>
                                        <th>Danh mục</th>
                                        <th>Giá</th>
                                        <th>On top</th>
                                        <th>Sale</th>
                                        <th>Ảnh</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $value)
                                    <tr>
                                        <td>
                                            <p class="p-name">{{ $value->name }}</p>
                                        </td>
                                        <td>{{ $value->code }}</td>
                                        <td>
                                            <p class="p-description">
                                                {{ $value->description }}
                                            </p>
                                        </td>
                                        <td>{{ $value['categoris']->name }}</td>
                                        <td>{{ $value->price }}</td>
                                        {{-- <td> {{ $value->is_top == 1 ? 'Có' : 'Không' }} </td>
                                        <td>{{ $value->on_sale == 1 ? 'Có' : 'Không' }}</td> --}}
                                        <td>
                                            @if($value->is_top == 1)
                                            <button type="button" class="btn btn-icon waves-effec btn-success">
                                                <i class="fa fa-star"></i>
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-icon waves-effec btn-danger">
                                                <i class="fa fa-star"></i>
                                            </button>
                                            @endif

                                        </td>
                                        <td>
                                            @if ($value->on_sale==1)
                                            <button type="button" class="btn btn-icon waves-effect btn-success">
                                                <i class="mdi mdi-sale"></i>
                                            </button>
                                            @else
                                            <button type="button" class="btn btn-icon waves-effect btn-danger">
                                                <i class="mdi mdi-sale"></i>
                                            </button>
                                            @endif

                                        </td>

                                        <td>
                                            <ul class="image-all">
                                                @foreach ($value->images as $key =>$value_img)
                                                {{-- <li class="li-image-product" style="list-style: none;">
                                                    <img class="image-all-product"
                                                        src="{{asset('/public/storage/'.$value_img->path)}}" alt="">

                                                </li> --}}
                                                <li class="li-image-product" style="list-style: none;">
                                                    <img class="image-all-product"
                                                        src="{{asset('public/storage/'.$value_img->path)}}" alt="">
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td style="white-space: nowrap; width: 1%;">
                                            <div class="editable-buttons">
                                                <a
                                                    href="{{ route('admin.product.edit', ['product_id' => $value->id]) }}">
                                                    <button type="submit"
                                                        class="btn btn-primary editable-submit btn-sm waves-effect waves-light">
                                                        <i class="mdi mdi-square-edit-outline"></i>
                                                    </button>
                                                </a>
                                                <a
                                                    href="{{ route('admin.product.destroy', ['product_id' => $value->id]) }}">
                                                    <button type="button"
                                                        class="btn btn-danger editable-cancel btn-sm waves-effect">
                                                        <i class="mdi mdi-close"></i>
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
<style>
    .image-all-product {
        height: 150px;
        width: 150px;
    }
</style>
@endsection