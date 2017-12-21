@extends('template.app')

@section('navbar')
    @if(Auth::user()->perfil == 'admin')
        @include('admin.adminNav')
    @else
        @include('aluno.alunoNav')
    @endif
@endsection

@section('menu')
    @if(Auth::user()->perfil == 'admin')
        @include('admin.adminMenu')
    @else
        @include('aluno.alunoMenu')
    @endif
@endsection

@section('content')
    @yield('conteudo')
@endsection