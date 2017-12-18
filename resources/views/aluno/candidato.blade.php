@extends('home')
@section('conteudo')
    <section style="position: relative;">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-money"></i>&nbsp; Candidatos</a></li>
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
            @include('aluno.candidatoLoad')
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="box box-widget widget-user" style="display: flex; padding: 5px; background-color: #f5f5f5;">
                <div class="col-sm-9 text-center" id="divFoto" style="margin-left: -20px">
                    <img id="idFoto" class="img-circle" src="{!! asset('img/aluno.png') !!}" alt="" height="110"><br/><br/>
                    <h6 style="margin: -10px 0 0 1px; font-size: 19px" class="label label-default" id="nomeAluno">Nome</h6>
                </div>
                <div class="col-sm-12 box" style="padding: 2px">
                    <ul class="todo-list" id="contacto">

                        <li class="" style="margin-bottom: 5px">
                            <span class="handle">
                                <i class="fa fa-location-arrow"></i>
                            </span>
                            <span class="text">Rua Costa do Sol</span>
                            <div class="tools">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                        </li>

                        <li class="cont" style="margin-bottom: 5px">
                            <span class="handle">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span class="text">12345678</span>
                            <div class="tools">
                                <i class="fa fa-phone"></i>
                            </div>
                        </li>
                        <li class="cont">
                            <span class="handle">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span class="text">soNos@gamil.com</span>
                            <div class="tools">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Disciplinas</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <ul class="todo-list" id="curso">
                            <li class="crs">
                                    <span class="handle">
                                        <i class="fa fa-book"></i>
                                    </span>
                                <span class="text">Disciplina</span>
                                <div class="tools2">
                                    <button class="btn btn-xs">Mais Detalhes</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
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
//                url : '?page=' + page,
                url : '?page='+page
//                type: 'GET',
//                dataType: 'json'
//                dataType: 'html'
            }).done(function (data) {
//                alert(data);
                $('#divTableCandidatos').html(data);
//                location.hash = page;
            }).fail(function () {
                alert('Posts could not be loaded.');
            });
        }
    </script>
@endsection