<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>{{ Str::upper(config('app.name')) }}</title>
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
            rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- daterange picker -->
        <link href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Color Picker -->
        <link href="{{ asset('assets/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
            rel="stylesheet">
        <!-- Tempusdominus Bootstrap 4 -->
        <link href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
            rel="stylesheet">
        <!-- Select2 -->
        <link href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}"
            rel="stylesheet">
        <!-- Bootstrap4 Duallistbox -->
        <link href="{{ asset('assets/admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}"
            rel="stylesheet">
        <!-- Theme style -->
        <link href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}" rel="stylesheet">
        <!-- summernote -->
        <link href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
        @stack('stylesheet')
    </head>

    <body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img alt="AdminLTELogo" class="animation__shake" height="60"
                    src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" width="60">
            </div>

            <!-- Navbar -->
            @include('admin.layouts.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->

            @include('admin.layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('admin.layouts.breadcrumb')
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('admin.layouts.footer')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="{{ asset('assets/admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
        <!-- date-range-picker -->
        <script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- bootstrap color picker -->
        <script src="{{ asset('assets/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
        </script>
        <!-- Bootstrap Switch -->
        <script src="{{ asset('assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        @stack('script')
    </body>

</html>
