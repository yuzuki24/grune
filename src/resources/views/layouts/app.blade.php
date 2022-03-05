<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME','') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .wrapper{
            min-height: 100vh;
            position: relative;/*←相対位置*/
            padding-bottom: 120px;/*←footerの高さ*/
            box-sizing: border-box;/*←全て含めてmin-height:100vhに*/
        }
        footer{
            width: 100%;
            background-color: #89c7de;
            text-align: center;
            padding: 30px 0;
        position: absolute;/*←絶対位置*/
            bottom: 0; /*下に固定*/
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div id="app" style="margin-bottom:20px;">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Backend Test
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                    <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            @guest
                             {{--  <li><a href="{{ route('login') }}">ログイン</a></li>--}}
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            </nav>

            @yield('content')
        </div>

        <footer class="main-footer" style="display: flex; justify-content: center; background-color:#fff; border-top: 1px solid #d3e0e9">
            <div class="version hidden-xs">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>

</body>
</html>
