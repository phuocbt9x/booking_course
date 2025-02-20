<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Admin</title>
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
            rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <!-- Tempusdominus Bootstrap 4 -->
        <link href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
            rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
        <!-- Theme style -->
        <link href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}" rel="stylesheet">
        <!-- overlayScrollbars -->
        <link href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
            rel="stylesheet">
        <!-- Daterange picker -->
        <link href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <!-- summernote -->
        <link href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
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
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('assets/admin/plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
        </script>
        <!-- Summernote -->
        <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
