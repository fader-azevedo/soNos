{{--@extends('template.index')--}}

{{--@section('filhote')--}}

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--<title>{{ config('app.name', 'Fader') }}</title>--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <title>Só Ciência Só Nós</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('font-awesome/css/font-awesome.css')!!}"  />
    <link rel="stylesheet" type="text/css" href="{!! asset('ionicons/css/ionicons.min.css')!!}"  />
    {{--<link rel="stylesheet" type="text/css" href="{!! asset('js/gritter/css/jquery.gritter.css')!!}" />--}}
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
{{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
{{----}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


        <form class="form-login"  method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h2 class="form-login-heading">Login</h2>
            <div class="login-wrap">
                <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Esqueceste Password?</a>
                    </span>
                </label>
                <button class="btn btn-theme btn-block" type="submit"><a><i class="zmdi zmdi-lock-open"></i> Login</a></button>
                <hr>
            </div>

            <div aria-hidden="true" aria-labelledby="" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h5 class="modal-title">Esqueceste Password ?</h5>
                        </div>
                        <div class="modal-body">
                            <p>Preenche com seu email para restaurar</p>
                            <div class="input-field">
                                <input id="email"  type="text" class="validate">
                                <label for="email" ><i class="zmdi zmdi-email"></i>&nbsp;Email</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                            <button class="btn btn-theme" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
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
{{--@endsection--}}
