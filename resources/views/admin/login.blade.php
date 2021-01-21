<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login page | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">

    <!-- Plugins css-->
    <link href="{{ asset('public/admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- App css -->
    <link href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
    <link href="{{ asset('public/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css"
        id="app-stylesheet">
</head>

<body class="authentication-page">
    <?php if (Session::has('message')) {
    $mes = Session::get('message');
    echo "<script type='text/javascript'>
        alert('$mes');

    </script>";
    Session::put('message', null);
    } ?>
    <?php if (isset($message)) {
    echo "<script type='text/javascript'>
        alert('$message');

    </script>";
    } ?>
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">
                        <div class="card-header p-4 bg-primary">
                            <h4 class="text-white text-center mb-0 mt-0">Velonic</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.checklogin') }}" class="p-2" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email Address :</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                        placeholder="Nhập email" name="email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password :</label>
                                    <input class="form-control" type="password" required="" id="password"
                                        placeholder="nhập password" name="password">
                                </div>

                                <div class="form-group mb-4">
                                    <div class="checkbox checkbox-success">
                                        <input id="remember" type="checkbox" checked="">
                                        <label for="remember">
                                            Remember me
                                        </label>
                                        <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your
                                            password?</a>
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-4 mb-4">
                                    <div class="col-12">
                                        <button class="btn btn-md btn-block btn-primary waves-effect waves-light"
                                            type="submit">Sign In</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-sm-12 text-center">
                                        <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html"
                                                class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('public/admin/assets\js\vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/admin/assets\js\app.min.js') }}"></script>

</body>

</html>