@extends('adminlayout')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Thêm sản phẩm</h4>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Thông tin sản phẩm</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <form class="form-horiz ontal" class="dropzone" id="myAwesomeDropzone" action="{{ route('admin.product.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-email">Tên sản
                                                    phẩm</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="example-email" name="name" class="form-control"
                                                        placeholder="Tên sản phẩm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-email">Code</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="example-email" name="code" class="form-control"
                                                        placeholder="Code .... ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-number">Giá sản
                                                    phẩm</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="price" placeholder="Giá sản phẩm">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-number">Số lượng</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="quantity" placeholder="Số lượng">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-textarea">Mô tả sản
                                                    phẩm</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" rows="5" id="example-textarea"
                                                        name="description" placeholder="Mô tả sản phẩm"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Danh mục sản phẩm</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="category_id">
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Bán chạy</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="is_top">
                                                        <option value="1">Có</option>
                                                        <option value="0">Không</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">On sale</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control" name="on_sale">
                                                        <option value="1">Có</option>
                                                        <option value="0">Không</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-fileinput">Chọn
                                                    ảnh sản phẩm</label>
                                                <div class="col-lg-10">
                                                    <input type="file" class="form-control" id="example-fileinput"
                                                        name="image[]" multiple>
                                                </div>
                                            </div>

                
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light mr-1">
                                                        Thêm vào cửa hàng
                                                    </button>
                                                    <a href="{{ route('admin.home') }}">
                                                        <button type="button"
                                                            class="btn btn-danger waves-effect waves-light">
                                                            Hủy
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            
        </div>
        <!-- end container-fluid -->

    </div>

@endsection
                 