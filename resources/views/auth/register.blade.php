<?php
use App\User;
use App\Disciplina;
    $lastId = User::all()->count();
    $disciplinas = Disciplina::all();
?>
@extends('template.index')

@section('filhote')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="box box-info">
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title"><i class="zmdi zmdi-edit"></i>&nbsp;Faça Pre-Inscrição</h3>--}}
                {{--</div>--}}
                <div class="box-body" style="background-color: #f8f8f8">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div id="Kar" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div  class="carousel-inner" id="divKar">
                                <div class="item active">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <fieldset >
                                                <legend style="margin-bottom: 0; font-size: 15px;" class="center btn btn-info" id="openModal">Fotografia</legend>
                                                {{--<a class="btn btn-info" >upload</a>--}}
                                                <div class="input-group container-fluid" id="uploadLast" style="height: 160px">
                                                    {{--accept="image/jpeg"--}}
                                                    {{--<input type="file"  id="fotoAluno">--}}
                                                    {{--<img height="128" width="128" id="fotoFinal" class="img-rounded center" src="{{asset('img/fotogr.jpg')}}">--}}
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12 input-field" >
                                                    <input id="apelido" type="text" class="form-control" name="apelido"  autofocus>
                                                    <label for="apelido"><i class="zmdi zmdi-account"></i>&nbsp;Apelido <i class="inputObrigatio">*</i></label>
                                                </div>
                                                <div class="col-sm-12 input-field {{ $errors->has('name') ? ' has-error' : '' }}" >
                                                    <input id="name" type="text" class="form-control" name="name"  value="{{ old('name') }}" >
                                                    <label for="name"><i class="zmdi zmdi-account"></i>&nbsp;Nomes Proprios <i class="inputObrigatio">*</i></label>

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12">
                                                    <fieldset>
                                                        <legend style="margin-bottom: -25px; font-size: 15px;" class="center">Sexo</legend>
                                                        <div class="input-field col-md-6">
                                                            <input id="cke1" type="radio" checked class="form-control" name="sexo" value="Feminino">
                                                            <label for="cke1" style="margin-right: 20px">Feminino</label>
                                                        </div>
                                                        <div class="input-field col-md-6">
                                                            {{--<div class="right" style="background-color: red; margin-right: 10px">--}}
                                                            <input id="cke2" type="radio" class="form-control" name="sexo" value="Masculino">
                                                            <label for="cke2"><i class=""></i>Masculino</label>
                                                            {{--</div>--}}
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: -30px">
                                        <div class="col-sm-6 input-field">
                                            <input id="naturalidade" class="form-control" type="text" name="naturalidade">
                                            <label for="naturaldade"><i class="fa fa-location-arrow"></i>&nbsp;Naturalidade <i class="inputObrigatio">*</i></label>
                                        </div>

                                        <div class="col-sm-6 input-field">
                                            <input id="dataN" class="form-control" name="dataNasc" type="text" onfocus="(this.type='date')">
                                            <label for="dataN"><i class="zmdi zmdi-calendar"></i>&nbsp;Data de Nascimento <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: -30px">
                                        <div class="col-sm-6 input-field" >
                                            <input id="bi" type="text" class="form-control" name="apelido" >
                                            <label for="bi"><i class="zmdi zmdi-format-list-numbered"></i>&nbsp;Numero de BI <i class="inputObrigatio">*</i></label>
                                        </div>

                                        <div class="col-sm-6 input-field">
                                            <input id="residencia" class="form-control" type="text" name="residencia">
                                            <label for="residencia"><i class="fa fa-map-marker"></i>&nbsp;Residencia <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: -30px">
                                        <div class="col-sm-6 input-field">
                                            <input id="contacto" class="form-control" type="text" name="numero" data-inputmask='"mask": "89-9999999"' data-mask>
                                            <label for="contacto"><i class="fa fa-phone"></i>&nbsp;Contacto <i class="inputObrigatio">*</i></label>
                                        </div>
                                        <div class="col-sm-6 input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                                            <label for="email"><i class="">@</i>&nbsp;Email</label>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 0">
                                        <div class="col-sm-11">
                                            <fieldset >
                                                <legend style="margin-bottom: -15px; font-size: 15px;" class="center">Encarregado</legend>
                                                <div class="col-sm-6 input-field">
                                                    <input id="nomeEncarregado" name="nomeEncarregado" class="form-control" type="text">
                                                    <label for="nomeEncarregado"><i class="fa fa-user"></i>&nbsp;Nome</label>
                                                </div>
                                                <div class="col-sm-6 input-field">
                                                    <input id="contactoEncarregado" name="contactoEncarregado" class="form-control" type="text" data-inputmask='"mask": "89-9999999"' data-mask>
                                                    <label for="contactoEncarregado"><i class="fa fa-phone"></i>&nbsp;Contacto</label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class=" col-sm-1" style="padding-top: 30px">
                                            <a class="btn btn-default right no-border" style="background-color: transparent"  href="#Kar" data-slide-to="1"><i style="font-size: 40px" class="fa fa-chevron-circle-right but"></i></a>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="password" type="hidden" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="hidden" class="form-control" name="password_confirmation" >
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="box">
                                            <div class="box-body">
                                                <fieldset >
                                                    <legend style="margin-bottom: 5px; font-size: 15px;" class="center">Selecione a disciplina</legend>
                                                    <div class="col-sm-3 ">
                                                        <select style="height: 36px"  id="numDis" class="form-control" name="numDis">
                                                            <option selected disabled id="" value="0">Tipo de Cuso</option>
                                                            <option id="uma" value="1">Presencial</option>
                                                            <option id="duas" value="2">Online</option>
                                                        </select>
                                                        <br/>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <input type="checkbox" id="check1" name="check1" checked>
                                                                <label style="height: 0.5px; top: -3px" for="check1">&nbsp;</label>
                                                            </span>
                                                            <select style="height: 36px" class="form-control"  name="disciplina1" id="disc1">
                                                                @foreach($disciplinas as $d)
                                                                    <option value="{{$d->id}}">{{$d->nome}}</option>
                                                                @endforeach
                                                            </select>
                                                            <br/>
                                                        </div>
                                                        <br/>
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <input type="checkbox" id="check2" name="check2">
                                                                <label style="height: 0; top: -3px; left: 5.5px" for="check2">&nbsp;</label>
                                                            </span>
                                                            <select style="height: 36px" disabled class="form-control"  name="disciplina2" id="listDisc2">
                                                                @foreach($disciplinas as $d)
                                                                    <option value="{{$d->id}}">{{$d->nome}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <fieldset style="margin-bottom: 10px">
                                                <legend style="margin-bottom: -15px; font-size: 15px;" class="center">Cursos a concorrer</legend>
                                                <div style="display: flex">
                                                    <div class="col-sm-4 input-field">
                                                        <input id="opcao1" class="form-control" type="text" name="opcao1">
                                                        <label for="opcao1"><i class="fa fa-pencil"></i>&nbsp;1ª Opção</label>
                                                    </div>
                                                    <div class="col-sm-8 input-field">
                                                        <input id="insti" class="form-control" type="text" name="insti1">
                                                        <label for="insti"><i class="fa fa-home"></i>&nbsp;Instituição</label>
                                                    </div>
                                                </div>


                                                <div style="display: flex">
                                                    <div class="col-sm-4 input-field">
                                                        <input id="opcao2" class="form-control" type="text"  name="opcao2">
                                                        <label for="opcao2"><i class="fa fa-pencil"></i>&nbsp;2ª Opção</label>
                                                    </div>
                                                    <div class="col-sm-8 input-field">
                                                        <input id="inst2" class="form-control" type="text" name="insti2">
                                                        <label for="inst2"><i class="fa fa-home"></i>&nbsp;Instituição</label>
                                                    </div>
                                                </div>

                                                <div style="display: flex">
                                                    <div class="col-sm-4 input-field">
                                                        <input id="opcao3" class="form-control" type="text"  name="opcao3">
                                                        <label for="opcao3"><i class="fa fa-pencil"></i>&nbsp;3ª Opção</label>
                                                    </div>
                                                    <div class="col-sm-8 input-field">
                                                        <input id="inst3" class="form-control" type="text" name="insti2">
                                                        <label for="inst3"><i class="fa fa-home"></i>&nbsp;Instituição</label>
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>
                                    </div>
                                    <div class="">
                                        <a class="btn btn-default"  href="#Kar" data-slide-to="0"><i class="fa fa-chevron-circle-left but"></i>&nbsp;&nbsp;Voltar&nbsp;&nbsp;&nbsp;</a>
                                        <a type="submit" class="btn btn-primary right">&nbsp;&nbsp;&nbsp;Salvar&nbsp;&nbsp;&nbsp;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                {{--<div class="box-footer">--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalFoto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title center">Fotografia</h4>
            </div>
            <div class="modal-body">
                <h3 class="center">
                    <label class="btn btn-info" for="upload">upload <i class="fa fa-file-image-o"></i></label>
                    <label class="btn btn-info" >Camera <i class="fa fa-camera"></i></label>
                </h3>
                <input type="file"  id="upload">
                <div class="container">
                    <div id="upload-demo" style="width:350px"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnSendImage" class="btn btn-info" data-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.date.extensions.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.extensions.js')!!}"></script>
    {{--<script type="text/javascript" src="{!! asset('croppie/croppie.min.js')!!}"></script>--}}
    <script type="text/javascript" src="{!! asset('croppie/croppie.js')!!}"></script>


    {{--<script type="text/javascript" src="{!! asset('js/custom.js')!!}"></script>--}}

    <script type="text/javascript">

        $(document).ready(function() {
            $('#openModal').on('click',function () {
                $('#modalFoto').modal({
                    show: true,
                    backdrop: "static"
                });
            });


            $('[data-mask]').inputmask();
            $('#check2').change(function () {
                if ($(this).is(':checked')) {
                    document.getElementById('listDisc2').removeAttribute('disabled');
                    document.getElementById('duas').setAttribute('selected', 'true');
                    document.getElementById('uma').removeAttribute('selected');
                } else {
                    document.getElementById('listDisc2').setAttribute('disabled', 'true');
                    document.getElementById('uma').setAttribute('selected', 'true');
                    document.getElementById('duas').removeAttribute('selected');
                }
            });

            var ano = new Date().getFullYear();
            var numMes = new Date().getUTCMonth();
            if (numMes < 10) {
                numMes = '0' + numMes;
            }
            var lastId = JSON.parse("{{json_encode($lastId)}}");
            var password = ano + '00' + lastId + '' + numMes;
            document.getElementById('password').value = password;
            document.getElementById('password-confirm').value = password;

            $uploadCrop = $('#upload-demo').croppie({
                enableExif: true,
                viewport: {
                    width: 150,
                    height: 150,
                    type: 'square'
                },
                boundary: {
                    width: 250,
                    height: 250
                }
            });

            $('#upload').on('change', function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function () {
                        console.log('Foto Carregada co sucesso');
                    });
                };
                reader.readAsDataURL(this.files[0]);
            });
//
        $('#btnSendImage').on('click', function (ev) {
            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (resp) {

                $.ajax({
                    url: "api/criarFoto",
                    type: "POST",
                    data: {"image":resp},
                    success: function () {
                        var html = '<img src="' + resp + '" />';
                        $("#uploadLast").html(html);
                    }
                });
            });
        });
        });
    </script>
@endsection

