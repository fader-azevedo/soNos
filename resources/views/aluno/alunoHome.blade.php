@extends('home')
@section('conteudo')
    <section style="position: relative;">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i>&nbsp; Inicio</a></li>
        </ol>
    </section>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{2}}<sup style="font-size: 20px"></sup></h3>
                <p>Turmas</p>
            </div>
            <div class="icon">
                <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
@endsection