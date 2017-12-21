<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('font-awesome/css/font-awesome.css')!!}"  />

    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css')!!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/AdminLTE.css')!!}"/>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/materialize.min.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/normalize.css')!!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/material-design-iconic-font.min.css')!!}"/>
</head>
<body class="hold-transition skin-black sidebar-mini ">

    <nav class="navbar navbar-default navbar-static-top">
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
                    <li><a href="{{ route('register') }}">Pre-Inscrição</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form class="form-login"  method="POST" action="{{ route('login') }}" autocomplete="off">
        {{ csrf_field() }}
        <h2 class="form-login-heading">Login</h2>
        <div class="login-wrap">
            <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                <label for="UserName"><i class="zmdi zmdi-account"></i>&nbsp;Email</label>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required>
                <label for="password"><i class="zmdi zmdi-lock"></i>&nbsp;Password</label>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <button class="btn btn-theme btn-block" type="submit"><a><i class="zmdi zmdi-lock-open"></i> Login</a></button>
            {{--<hr>--}}
        </div>
    </form>
    <script src="{!! asset('js/jquery.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('js/materialize.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('js/jquery.backstretch.min.js')!!}"></script>
    <script>
        $.backstretch("{!! asset('img/bak.jpg')!!}", {speed: 500});
    </script>
</body>