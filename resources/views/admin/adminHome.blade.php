@extends('home')
<?php
use App\Turma,App\Inscricao,App\Disciplina;
    $numTurma = Turma::all()->count();
    $numInscricao = Inscricao::query()->where('ano','=',date('Y'))->count();
    $numDisc = Disciplina::all()->count();
?>
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
                <h3>{{$numTurma}}<sup style="font-size: 20px"></sup></h3>
                <p>Turmas</p>
            </div>
            <div class="icon">
                <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$numInscricao}}</h3>

                <p>Incrições</p>
            </div>
            <div class="icon">
                <i class="ion ion-edit"></i>
            </div>
            <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue-gradient">
            <div class="inner">
                <h3>2</h3>
                <p>Cursos</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-book"></i>
            </div>
            <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$numDisc}}</h3>
                <p>Disciplinas</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-bookmark"></i>
            </div>
            <a href="#" class="small-box-footer">Mais info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div id="carro" class="carousel slide" data-ride="carousel" data-interval="false">
        <div  class="carousel-inner" id="divKar">
            <div class="item active">
                <div class="row">
                    <section class="col-lg-9 connectedSortable">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <i class="fa fa-bar-chart-o"></i>
                                <h3 class="box-title">Pagamento de Mensalidades</h3>

                            </div>
                            <div class="box-body">
                                <h5 class="centered"><label class="label" style="background-color: #00a65a">Pagas</label>
                                    <label class="label" style="background-color: #f56954">Nao Pagas</label></h5>
                                <div class="chart" id="bar-chart"  style="height:290px">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="col-lg-3 connectedSortable">
                        <div class="box box-danger">
                            <div class="box-header with-border">

                                <i style="color: #00a65a" class="fa fa-money"></i>
                                <h3 style="color: #00a65a" class="box-title">Pagamento</h3>
                                <i class="fa fa-times"></i>
                                <i style="color: red" class="fa fa-money"></i>
                                <h3 style="color: red" class="box-title">Dividas</h3>

                            </div>
                            <div class="box-body chart-responsive">
                                <div class="chart" id="payVSdivida" style="height: 300px;"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="item">
                <div class="row">
                    <h1>Ainda Nao tenh Ideia</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#li-Inicio').addClass('active');
    </script>
@endsection