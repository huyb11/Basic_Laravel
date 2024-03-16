<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.blocks.head')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        @include('layout.blocks.navbar')>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layout.blocks.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('layout.blocks.main.content-header')
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                  @yield('admin')
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layout.blocks.main-footer')
    </div>
    <!-- ./wrapper -->
    @include('layout.blocks.foot')
</body>

</html>
