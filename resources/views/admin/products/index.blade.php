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
                    <h4 class="page-title">
                        @php
                        if(isset($key)){
                        echo "Kết quả tìm kiếm sản phẩm có code : " .$key;
                        } else {
                        echo "Tất cả sản phẩm";
                        }
                        @endphp</h4>
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
                                        <th>Tên sản phẩm</th>
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
                                            <p class="p-name" id="hien">
                                                {{ $value->name }}
                                            </p>
                                        </td>
                                        <td>
                                            <a href="{{Route('admin.product.show',['product_id',$value->id])}}">{{ $value->code }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#myModal{{$value->id}}"
                                                title="Quick View">
                                                <p class="p-description" id="hiendes" onclick="startmodal()">
                                                    {{ $value->description }}
                                                </p>
                                            </a>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="modal fade" id="myModal{{$value->id}}">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    {{ $value->description }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $value['categoris']->name }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon waves-effec btn-{{$value->is_top==1?'success':'dark'}}">
                                                <i class="fa fa-star"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-icon waves-effect btn-{{$value->on_sale==1?'success':'dark'}}">
                                                <i class="mdi mdi-sale"></i>
                                            </button>
                                        </td>

                                        <td>
                                            <ul class="image-all">
                                                <li class="li-image-product" style="list-style: none;">
                                                    <img class="image-all-product"
                                                        src="{{asset('public/storage/'.$value['images'][0]->path)}}"
                                                        alt="">
                                                </li>
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
                                                <a
                                                    href="{{ route('admin.product.show', ['product_id' => $value->id]) }}">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('[id="hien"]').mouseenter(function(){
        $('[id="hien"]').css("overflow","visible");
        $('[id="hien"]').css("text-overflow","no");
        $('[id="hien"]').css("width","100%");
        });
        $('[id="hien"]').mouseleave(function(){
        $('[id="hien"]').css("overflow","hidden");
        $('[id="hien"]').css("text-overflow","ellipsis");
        $('[id="hien"]').css("width","100px");
        });
    });
</script>
@endsection