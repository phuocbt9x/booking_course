<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" href="index3.html">
        <img alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex mb-3 mt-3 pb-3">
            <div class="image">
                <img alt="User Image" class="img-circle elevation-2"
                    src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}">
            </div>
            <div class="info">
                <a class="d-block" href="#">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview"
                role="menu">
                <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.categories.index') }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.posts.index') }}">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Post</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
