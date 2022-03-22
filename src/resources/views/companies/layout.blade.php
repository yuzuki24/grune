<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!--jquery -->
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <!--bootstrap-->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.min.css') }}">
        <!-- validationEngine css -->
        <link rel="stylesheet" href="{{ asset('css/3rdparty/validation-engine/validationEngine.jquery.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!--tabulater-->
        <!--<link href="https://unpkg.com/tabulator-tables@5.1.6/dist/css/tabulator.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.1.6/dist/js/tabulator.min.js"></script>
        <link href="dist/css/tabulator.min.css" rel="stylesheet">
        <script type="text/javascript" src="dist/js/tabulator.min.js"></script> -->

        <script src="{{ asset('https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js') }}"></script>

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- Favicon Link
        <link rel="icon" type="image/png" href="">

        -->
        @yield('css-scripts')
        <!-- backend css -->
        <link rel="stylesheet" href="{{ asset('css/backend/backend.css') }}">
        @yield('companies_edit')
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini @yield('body-class')">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="{{ route('companies.create') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">BR</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Backend Test</b></span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" style="display: none;">{{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <!-- Include sidebar navigation content depending on each user type-->
            <!-- The right way to do according to documentation is to use 'yield', however it does not work with reading multiple separate files-->
            <!-- Should this be implemented in controller instead of view?-->
            <aside class="main-sidebar">
                <!-- Main navigation sidebar -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('img/ic_profile.png') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{ Auth::user()->name }}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">

                        <li class="header">MAIN NAVIGATION</li>

                        <li id="menu-users" class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span>Users</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="edit-users"><a href="{{ route('admin.add') }}"><i class="fa fa-circle-o"></i> Add / Edit</a></li>
                                <li class="list-users"><a href="{{ route('admin') }}"><i class="fa fa-circle-o"></i> List</a></li>
                            </ul>
                        </li>

                        <li id="menu-companies" class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i>
                                <span>Companies</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="add-companies"><a href="{{ route('companies.create') }}"><i class="fa fa-circle-o"></i> Add / Edit</a></li>
                                <li class="list-companies"><a href="{{ route('companies.index') }}"><i class="fa fa-circle-o"></i> List</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <!-- /.sidebar-wrapper -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->


            <footer class="main-footer">
                <div class="version hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
            </footer>

        </div>
        <!-- ./wrapper -->


        <!-- jQuery 3 -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/jquery-cookie/jquery.cookie.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!--<script src="/assets/libs/angular-ui-bootstrap/ui-bootstrap-tpls-1.3.0.min.js" type="text/javascript"></script>-->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="{{ asset('js/backend/backend.js') }}"></script>
        <script type="text/javascript"> var rootUrl = "{{ url('/') }}";</script>
        <!--tabulater-->


        @yield('js-scripts')
    </body>
</html>
