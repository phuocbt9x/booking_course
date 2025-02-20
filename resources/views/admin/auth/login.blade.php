<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Admin | Log in</title>

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
            rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- icheck bootstrap -->
        <link href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
        <!-- Theme style -->
        <link href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}" rel="stylesheet">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <h1 class="h1"><b>Admin</b></h1>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form action="{{ route('admin.auth.login') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="input-group mb-3">
                            <input @class(['form-control', 'is-invalid' => $errors->has('email')]) name="email" placeholder="Email" type="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <input @class(['form-control', 'is-invalid' => $errors->has('password')]) name="password" placeholder="Password" type="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                            @enderror
                        </div>
                        @error('auth_error')
                            <span class="error" style="color: #dc3545">{{ $message }}</span>
                        @enderror
                        <div class="row mt-3">
                            <div class="col-8">
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
    </body>

</html>
