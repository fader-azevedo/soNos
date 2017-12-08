@extends('template.app')

@section('menu')

    @if(Auth::user()->perfil == 'admin')
        @include('admin.adminMenu')
    @else
        @include('aluno.alunoMenu')
    @endif
@endsection

@section('content')
    <h3>{{ Auth::user()->perfil}}</h3>
@endsection
