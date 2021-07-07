<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('favicon .png')}}" rel="icon">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@yield('additionalStyles')
<!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">


</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{env('MAIN_WEBSITE')}}" class="nav-link" target="_blank"><i class="fa fa-home"></i> Main
                    Webisite</a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    {{ Auth::user()->name }} <i class="fa fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">User Settings</span>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('password.edit',Auth::user()->id)}}" class="dropdown-item">
                        <i class="fa fa-key"></i> Reset Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-user"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('adminHome')}}" class="brand-link">
            <span class="brand-text">{{env('APP_NAME')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('adminHome')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    @if(Auth::user()->hasRole(['admin|Blogger']))

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Posts
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('post.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('post.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <a href="{{route('enquiry.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-mail-bulk"></i>
                                <p>
                                    Enquiry
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Testimonials
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('testimonial.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('testimonial.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole(['admin|HR']))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Openings
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('opening.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('opening.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('application.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Applications</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Services
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('service.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('service.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Role Manangement
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('role.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('role.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('user.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('user.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Portfolio
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('portfolio.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('portfolio.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Staff
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('staff.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('staff.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->hasRole(['admin|Blogger']))

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-image"></i>
                                <p>
                                    Flayer
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                            <li class="nav-item">
                                    <a href="{{route('flayer.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('flayer.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endif

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('adminHome')}}">Dashboard</a></li>
                            @if(request()->segment(3))
                                @if(Route::has(request()->segment(3).".index"))
                                    <li class="breadcrumb-item"><a
                                            href="{{route(request()->segment(3).".index")}}">{{ucfirst(request()->segment(1))}}</a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item active">{{ucfirst(request()->segment(3))}}</li>
                                @endif
                            @endif
                            @if(request()->segment(4))
                                <li class="breadcrumb-item active">{{ucfirst(request()->segment(4))}}</li>
                            @endif
                            @if(request()->segment(5))
                                <li class="breadcrumb-item active">{{ucfirst(request()->segment(5))}}</li>
                            @endif
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; {{ now()->year }} <a href="www.layalibahrain.com">Spadika Web Solutions</a>.</strong> All
        rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    //Script to activate menu item based on current URL
    var url = window.location;
    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
</script>
<script type="text/javascript">
    $(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        @if ($message = Session::get('success'))
        Toast.fire({
            icon: 'success',
            title: '{{$message}}.'
        })
        @endif
        @if ($message = Session::get('error'))
        Toast.fire({
            icon: 'error',
            title: '{{$message}}.'
        })
        @endif
        @if ($message = Session::get('warning'))
        Toast.fire({
            icon: 'warning',
            title: '{{$message}}.'
        })
        @endif
    });
</script>
@yield('additionalScripts')
</body>
</html>
