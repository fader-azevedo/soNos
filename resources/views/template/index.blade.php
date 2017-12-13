<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestão de Mensalidades</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('font-awesome/css/font-awesome.css')!!}"  />
    <link rel="stylesheet" type="text/css" href="{!! asset('ionicons/css/ionicons.min.css')!!}"  />
    <link rel="stylesheet" type="text/css" href="{!! asset('js/gritter/css/jquery.gritter.css')!!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('lineicons/style.css')!!}"/>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css')!!}" />
    {{--<link rel="stylesheet" type="text/css" href="{!! asset('css/style-responsive.css')!!}"/>--}}


    <link rel="stylesheet" type="text/css" href="{!! asset('css/_all-skins.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('charts/morris.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('select2/css/select2.min.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/AdminLTE.css')!!}"/>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/materialize.min.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/normalize.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material-design-iconic-font.min.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('croppie/croppie.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/sweet-alert.css')!!}"/>
</head>
<body class="hold-transition skin-black sidebar-mini ">
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">&nbsp;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Registar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    @yield('filhote')
    @include('template.script')
    @yield('scripts')

</body>
</html>