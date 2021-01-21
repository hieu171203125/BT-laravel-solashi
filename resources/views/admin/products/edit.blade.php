@extends('adminlayout')
@section('content')

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">General Elements</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">General Elements</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Input Types</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-email">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" id="example-email" name="example-email"
                                                        class="form-control" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-textarea">Text
                                                    area</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" rows="5"
                                                        id="example-textarea"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Readonly</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" readonly=""
                                                        value="Readonly value">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Input Select</label>
                                                <div class="col-lg-10">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-fileinput">Default file
                                                    input</label>
                                                <div class="col-lg-10">
                                                    <input type="file" class="form-control" id="example-fileinput">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-number">Number</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="example-number" type="number"
                                                        name="number">
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
