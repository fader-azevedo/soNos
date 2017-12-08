<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Fader') }}</title>--}}

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <title>Gestão</title>
    @include('template.css')
</head>
<body class="hold-transition skin-black sidebar-mini ">
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Fader') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->username }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--@yield('content')--}}

    {{--</div>--}}

    <!-- Scripts -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo" style="position: fixed">
                <span class="logo-mini"><img src="{!! asset('img/logo1.jpg')!!}" class="" width="50"></span>
                <span class="logo-lg"><img src="{!! asset('img/logo1.jpg')!!}" class="" width="70"></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <div class="navbar navbar-fixed-top">
                <!-- Sidebar toggle button-->
                {{--<a style="border: none" href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
                {{--</a>--}}

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li style="border: none" class="dropdown notifications-menu">
                            <a href="#" style="border: none" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">{{\App\Inscricao::query()->where('estado','=','pre-inscrito')->count()}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"></li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            {{--<a href="#">--}}
                                                {{--<i class="fa fa-users text-aqua"></i>{{\App\Inscricao::query()->where('estado','<>','inscrito')->count()}} Candidato Fez Pre-Inscricao--}}
                                            {{--</a>--}}

                                            {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                            {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                            {{--</a>--}}

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" style="border: none">
                            <a style="border: none" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('img/logo1.jpg')}}" class="user-image" height="200" alt="">
                                {{--<span class="hidden-xs"></span>--}}
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{asset('img/logo1.jpg')}}" class="img-circle" alt="">
                                    <p style="color: #3c3f41">
                                        So Nos
                                        <small></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" data-toggle="modal" href="#myModalLogOut">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a style="border: none" href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" style="position: fixed">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree" style="margin-top: 50px">
                    @yield('menu')
                </ul>
            </section>
        </aside>

        <div class="lock-screen">
            <div class="modal fade" id="myModalLogOut"  role="dialog" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h5 class="modal-title">Logout</h5>
                        </div>
                        <div class="modal-body">
                            <p class="centered"><img class="img-circle" width="80" src="{!! asset('img/logo.jpg')!!}"></p>
                            <p>Desejas Sair do Sistema ???</p>
                        </div>
                        <div class="modal-footer">
                            <button style="float: left" data-dismiss="modal" class="btn btn-danger" type="button">Nao</button>
                                <a href="{{ route('logout') }}" class="btn btn-theme" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Sim
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content" style="padding-top: 60px">
                <div class="row">
                    @yield('content')
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong class="centered">Sistema de Gestão de Mensalidades<a href=""></a></strong>
        </footer>
    </div>
    @include('template.script')

    {{--<script type="text/javascript" src="{!! asset('datatables.net/js/jquery.dataTables.min.js')!!}"></script>--}}
{{--    <script type="text/javascript" src="{!! asset('datatables.net-bs/js/dataTables.bootstrap.min.js')!!}"></script>--}}
    <script>
        function formatarData(date) {
            var meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];

            var dia = date.getDate();
            var mesIndex = date.getMonth();
            var ano = date.getFullYear();
            return dia+'-'+meses[mesIndex]+'-'+ano;
        }
    </script>
    {{--@yield('scripts')--}}
    {{--@yield('scripts2')--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
