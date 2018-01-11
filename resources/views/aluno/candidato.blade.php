@extends('home')
@section('conteudo')
    {{--{{$al}}--}}
    <section style="position: relative;">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i>&nbsp; Candidatos</a></li>
        </ol>
    </section>
    <div class="row"  style="margin-top: -10px">
        <div class="input-field col-sm-4">
            <input type="text" id="txtPesquisar" onkeyup="filtrar()">
            <label for="txtPesquisar"><i class="fa fa-search"></i>&nbsp;Pesquisar</label>
        </div>
    </div>
    <div class="row" style=" margin-bottom: -20px" >
        <div class="col-sm-8 col-md-8 col-lg-8" id="divTableCandidatos">
            @include('aluno.candidatoTabela')
        </div>
        <div id="box-Info" class="col-sm-4 col-md-4 col-lg-4">
            <div  class="box box-widget widget-user" style="display: flex; flex-direction: column; padding: 5px; background-color: #f5f5f5;">
                {{--<div class="col-sm-9 text-center" id="divFoto">--}}
                    {{--<img id="idFoto" class="img-circle" src="{!! asset('img/aluno.png') !!}" alt="" height="110"><br/><br/>--}}
                    {{--<h6 style="margin: -10px 0 0 1px; font-size: 19px" class="label label-default" id="nomeAluno">Nome</h6>--}}
                {{--</div>--}}

                <div class="lockscreen-item text-right">
                    <div class="lockscreen-image" >
                        <img id="idFoto" class="img-circle" src="{!! asset('img/aluno.png') !!}" height="110">
                    </div>
                    <input id="idCandidato" type="hidden" value="0">
                    <h5 id="nomeAluno">Nome do candidato</h5>
                </div>
                <div class="col-sm-12" style="padding: 2px; margin-top: 10px; background-color: white">
                    <ul class="todo-list" id="contacto">
                        <li class="cont" style="margin-bottom: 5px">

                            <h6 style="font-size: 14px">
                                <span class="handle" style="width: 30%">
                                    <i class="fa fa-check text-aqua"></i>
                                    Sexo:
                                </span>
                                <span class="text" style="width: 50%">
                                    Masculino
                                </span>
                            </h6>
                        </li>
                        <li class="cont" style="margin-bottom: 5px">

                            <h6 style="font-size: 14px">
                                <span class="handle" style="width: 30%">
                                    <i class="fa fa-location-arrow text-aqua"></i>
                                    Residência:
                                </span>
                                <span class="text" style="width: 50%">
                                    Rua Costa do Sol
                                </span>
                            </h6>
                        </li>

                        <li class="cont" style="margin-bottom: 5px">

                            <h6 style="font-size: 14px">
                                <span class="handle" style="width: 30%">
                                    <i class="fa fa-phone text-aqua"></i>
                                    Contacto:
                                </span>
                                <span class="text" style="width: 50%">
                                    12345678
                                </span>
                            </h6>
                        </li>

                        <li class="cont" style="margin-bottom: 5px">

                            <h6 style="font-size: 14px">
                                <span class="handle" style="width: 30%">
                                    <i class="fa fa-phone text-aqua"></i>
                                    Email:
                                </span>
                                <span class="text" style="width: 50%">
                                    socienciasonos@gmail.com
                                </span>
                            </h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Disciplinas</h3>
                    </div>
                    <div class="box-body">
                        <ul class="todo-list" id="curso" style="display: flex">
                            <li class="crs">
                                    <span class="handle">
                                        <i class="fa fa-book" style="color: #00b0ff"></i>
                                    </span>
                                <span class="text">Disciplina</span>
                            </li>
                            <li class="crs">
                                    <span class="handle">
                                        <i class="fa fa-book" style="color: #00b0ff"></i>
                                    </span>
                                <span class="text">Disciplina2</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<?php $idUltomoCandidato=04?>

@section('scripts')
    <script>

        {{--var idU = JSON.parse('{{json_decode($idUltomoCandidato)}}');--}}
//        alert(idU);
        $('#li-Candidato').addClass('active');

        function filtrar() {

            var input = document.getElementById("txtPesquisar");
            var tabela = document.getElementById("tabela1");
            var linhas = tabela.getElementsByTagName("tr");

            for (var indice = 0; indice < linhas.length; indice++) {
                var coluna = linhas[indice].getElementsByTagName("td")[1];
                if (coluna) {
                    if (coluna.innerHTML.toLowerCase().indexOf(input.value.toLowerCase()) > -1) {
                        linhas[indice].style.display = "";
                    } else {
                        linhas[indice].style.display = "none";
                    }
                }
            }
        }

        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getPosts(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function (e) {
                e.preventDefault();
                getPosts($(this).attr('href').split('page=')[1]);
            });
        });

        function getPosts(page) {
            $.ajax({
                url : '?page='+page
            }).done(function (data) {
                $('#divTableCandidatos').html(data);

                $('.btn-ver').click(function () {
                    var idCandidato = $(this).attr('data-id');
                    var ultimoId = parseInt(document.getElementById('idCandidato').value);
                    if (parseInt(idCandidato) === ultimoId) {
                        return;
                    }
                    buscarDadosCandidato(idCandidato);
                    $('#box-Info').animate({
                        left: '0px'
                    },"fast",voltar());
                });

            }).fail(function () {
                alert('Posts could not be loaded.');
            });
        }

        $('.btn-ver').click(function () {
            var idCandidato = $(this).attr('data-id');
            var ultimoId = parseInt(document.getElementById('idCandidato').value);
            if (parseInt(idCandidato) === ultimoId) {
                return;
            }
            buscarDadosCandidato(idCandidato);
            $('#box-Info').animate({
                left: '0px'
            },"fast",voltar());
        });

        function voltar() {
            $('#box-Info').animate({
                left: '+=380px'
            },"fast")
        }

        var anoActual =  (new Date()).getFullYear();
        function buscarDadosCandidato(idCandidato) {
            $.ajax({
                url: '/api/getInscricao',
                type: 'POST',
                data: {'idAluno': idCandidato, 'ano': anoActual},
                success: function (rs) {
                    document.getElementById('idCandidato').value = idCandidato;
                    document.getElementById('nomeAluno').innerHTML =rs.inscricao[0].nome;
                    document.getElementById('idFoto').src =  '{{asset('img/alunos')}}'.concat('/' + rs.inscricao[0].foto);

                    $('.cont').remove();
                    $('.crs').remove();
                    for (var i = 0; i < rs.inscricao.length; i++) {
                        $('#curso').append('<li class="crs" style="margin-bottom:3px"><span class="handle"> <i style="color: #00a7d0;" class="fa fa-book"></i> </span> <span class="text">' + rs.inscricao[i].disciplina + '</span></li>')
                    }
                    $('#contacto').append('<li class="cont" style="margin-bottom: 5px"> <h6 style="font-size: 14px"> <span class="handle" style="width: 30%"> <i class="fa fa-check text-aqua"></i>&nbsp;Sexo:</span> <span class="text" style="width: 50%">'+rs.inscricao[0].sexo+' </span> </h6></li>');
                    $('#contacto').append('<li class="cont" style="margin-bottom: 5px"> <h6 style="font-size: 14px"> <span class="handle" style="width: 30%"> <i class="fa fa-location-arrow text-aqua"></i>&nbsp;Residência:</span> <span class="text" style="width: 50%">'+rs.inscricao[0].residencia+'</span> </h6></li>');
                    $('#contacto').append('<li class="cont" style="margin-bottom: 5px"> <h6 style="font-size: 14px"> <span class="handle" style="width: 30%"> <i class="fa fa-phone text-aqua"></i>&nbsp;Contacto:</span> <span class="text" style="width: 50%">'+rs.inscricao[0].numero+'</span> </h6></li>');
                    $('#contacto').append('<li class="cont" style="margin-bottom: 5px"> <h6 style="font-size: 14px"> <span class="handle" style="width: 30%"> <i class="fa fa-envelope text-aqua"></i>&nbsp;Email:</span> <span class="text" style="width: 50%">'+rs.inscricao[0].email+' </span> </h6></li>');
                }
            });
        }
    </script>
@endsection
