<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>@yield('title', config('app.name'))</title>
    <!-- Font Sahel -->
    <link rel="stylesheet" href="{{asset('dist/vazirmatn-v32.102/Vazirmatn-font-face.css')}}">
    <!-- All -->
    <link rel="stylesheet" href="{{asset('dist/fontawesome-free-5.15.4-web/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/AdminLTE-3.2.0/css/adminlte.css')}}">
    <!-- Theme RTL style -->
    <link rel="stylesheet" href="{{asset('css/adminlte-rtl.css')}}">
    <!-- bootstrap-rtl -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    @yield('POS_HEAD')
</head>

<body class="hold-transition sidebar-mini layout-fixed rtl">
    @yield('POS_BEGIN')
    <div id="app" class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('content-header')</h1>
                        </div>
                        <div class="col-sm-6">
                            @yield('content-breadcrumb')
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        @include('layouts.footer')
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('dist/jquery-3.6.0/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('dist/jquery-ui-1.13.1/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('dist/bootstrap-4.6.1-dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/AdminLTE-3.2.0/js/adminlte.min.js')}}"></script>
    <!-- script -->
    <script src="{{asset('js/dashboard.js')}}"></script>

    @yield('POS_END')
</body>

</html>