@extends('home')
@section('conteudo')

    <section style="position: relative;">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-money"></i>&nbsp; Mensalidade</a></li>
            <li class="active">Registar</li>
        </ol>
    </section>
@endsection

@section('scripts')
    <script>
        $('#li-Mensalidade').addClass('active');
        $('#li-RegistarMensalidade').addClass('active');
    </script>
@endsection