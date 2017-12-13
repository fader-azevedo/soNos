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
                {{--action="{{ route('register') }}"--}}
                <div class="box-body" style="background-color: #f8f8f8">
                    <form id="formulario" class="form-horizontal" method="POST"  autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div id="Kar" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div  class="carousel-inner" id="divKar">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <fieldset >
                                                <legend style="margin-bottom: 0; font-size: 15px;" class="center btn btn-info" id="openModal">Fotografia</legend>
                                                <input type="hidden" id="id" name="id">
                                                <input type="file" name="inputFoto" id="inputFoto">
                                                {{--<a class="btn btn-info" >upload</a>--}}
                                                <div class="input-group container-fluid" id="uploadLast" style="height: 160px">
                                                    <img height="128" width="128" id="fotoFinal" class="img-rounded center" src="{{asset('img/aluno1.png')}}">
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-12 input-field {{ $errors->has('apelido') ? ' has-error' : '' }}" >
                                                    <input id="apelido" type="text" class="form-control" name="apelido"  required oninvalid="this.setCustomValidity('Wua biwa')" oninput="this.setCustomValidity('')">
                                                    <label for="apelido"><i class="zmdi zmdi-account"></i>&nbsp;Apelido <i class="inputObrigatio">*</i></label>

                                                    @if ($errors->has('apelido'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('apelido') }}</strong>
                                                        </span>
                                                    @endif
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
                                            <label for="naturalidade"><i class="fa fa-location-arrow"></i>&nbsp;Naturalidade <i class="inputObrigatio">*</i></label>
                                        </div>

                                        <div class="col-sm-6 input-field">
                                            <input id="dataN" class="form-control" name="dataNasc" type="text" onfocus="(this.type='date')">
                                            <label for="dataN"><i class="zmdi zmdi-calendar"></i>&nbsp;Data de Nascimento <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: -30px">
                                        <div class="col-sm-6 input-field" >
                                            <input id="numBi" type="text" class="form-control" name="numBi" >
                                            <label for="numBi"><i class="zmdi zmdi-format-list-numbered"></i>&nbsp;Numero de BI <i class="inputObrigatio">*</i></label>
                                        </div>

                                        <div class="col-sm-6 input-field">
                                            <input id="residencia" class="form-control" type="text" name="residencia">
                                            <label for="residencia"><i class="fa fa-map-marker"></i>&nbsp;Residencia <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: -30px">
                                        <div class="col-sm-6 input-field">
                                            {{--data-inputmask='"mask": "89-9999999"' data-mask--}}
                                            <input id="contacto" class="form-control" type="text" name="numero" >
                                            <label for="contacto"><i class="fa fa-phone"></i>&nbsp;Contacto <i class="inputObrigatio">*</i></label>
                                        </div>
                                        <div class="col-sm-6 input-field {{ $errors->has('email') ? ' has-error' : '' }}">
                                        {{--<div class="col-sm-6 input-field">--}}
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
                                        <div class="col-sm-11" style="margin-bottom: 0">
                                            <fieldset>
                                                <legend style="margin-bottom: -15px; font-size: 15px;" class="center">Encarregado</legend>
                                                <div class="col-sm-6 input-field">
                                                    <input id="nomeEncarregado" name="nomeEncarregado" class="form-control" type="text">
                                                    <label for="nomeEncarregado"><i class="fa fa-user"></i>&nbsp;Nome</label>
                                                </div>
                                                <div class="col-sm-6 input-field">
                                                    <input id="contactoEncarregado" name="contactoEncarregado" class="form-control" type="text" >
                                                    <label for="contactoEncarregado"><i class="fa fa-phone"></i>&nbsp;Contacto</label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class=" col-md-1 pull-right" style="padding-top: 30px; position: relative">
                                            <a class="btn btn-default right no-border" style="background-color: transparent; "   id="btnNext"><i style="font-size: 40px" class="fa fa-chevron-circle-right but"></i></a>
                                        </div>
                                    </div>

                                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" >--}}
                                        {{--<div class="col-md-6">--}}
                                            <input id="password" type="hidden" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<div class="col-md-6">--}}
                                            <input id="password-confirm" type="hidden" class="form-control" name="password_confirmation" >
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="box">
                                            <div class="box-body">
                                                <fieldset >
                                                    <legend style="margin-bottom: 5px; font-size: 15px;" class="center">Selecione a disciplina</legend>
                                                    <div class="col-sm-3 ">
                                                        <select style="height: 36px" id="tipoCurso" class="form-control" >
                                                            <option selected disabled id="" value="0">Tipo de Cuso</option>
                                                            <option id="presencial" value="presencial">Presencial</option>
                                                            <option id="Online" disabled value="onine">Online</option>
                                                        </select>
                                                        <label for="tipoCurso"></label>
                                                        <input type="hidden" value="1" name="numDis" id="numDis">
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <select style="height: 36px" class="form-control"  name="disciplina1" id="disc1">
                                                            @foreach($disciplinas as $d)
                                                                <option value="{{$d->id}}">{{$d->nome}}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="disc1"></label>
                                                    </div>

                                                    <div class="col-sm-5 input-group">
                                                        <span class="input-group-addon">
                                                            <input type="checkbox" id="check2" name="check2">
                                                            <label style="height: 0; top: -3px; left: 5.5px" for="check2">&nbsp;</label>
                                                        </span>
                                                        <label for="listDisc2"></label>
                                                        <select style="height: 35px" disabled class="form-control"  name="disciplina2" id="listDisc2">
                                                            @foreach($disciplinas as $d)
                                                                <option value="{{$d->id}}">{{$d->nome}}</option>
                                                            @endforeach
                                                        </select>
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
                                    {{--<input id="" type="text" class="form-control" name="" required oninvalid="this.setCustomValidity('Wua biwa')" oninput="this.setCustomValidity('')">--}}

                                    <div class="">
                                        <a class="btn btn-default"  href="#Kar" data-slide-to="0"><i class="fa fa-chevron-circle-left but"></i>&nbsp;&nbsp;Voltar&nbsp;&nbsp;&nbsp;</a>
                                        <button type="submit" class="btn btn-primary right">&nbsp;&nbsp;&nbsp;Salvar&nbsp;&nbsp;&nbsp;</button>
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
    <div class="modal-dialog" style="width: 30%">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="center">
                    <label class="btn btn-info" id="btnUpload" for="imgUpoad">upload <i class="fa fa-file-image-o"></i></label>
                    <label class="btn btn-info" id="btnCamera">Camera <i class="fa fa-camera"></i></label>
                </h3>
                <input type="file"  id="imgUpoad">
                <div id="karFoto" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" style="height: 250px">
                        <div class="item active">
                            <div id="upload-demo" class="center" style="width:350px; margin: auto"></div>
                        </div>
                        <div class="item">
                            <div id="FotoCam" class="center" style="width:350px; margin: auto">
                                <img  height="230" width="320" src="" id="foto-cliente"  class="img-rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #a0a2a6">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnSendImage" class="btn btn-info" data-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="modalErro">
    <div class="modal-dialog box box-danger" style="width: 30%; top: 220px">
        <div class="modal-content ">
            <div class="modal-body center">
                <div class="container center">
                    <i style="color: #e78473" class="zmdi zmdi-alert-triangle zmdi-hc-5x"></i>
                </div>
                <h5 style="color: #e78473; margin: 10px" class="center">Por favor, preenche todos campos obrigatorios</h5>
                <p><i class="inputObrigatio">*</i>&nbsp; Campo Obrigatório</p>
                <button type="button" class="btn btn-default" data-dismiss="modal">Esta Bem</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    {{--<script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.js')!!}"></script>--}}
    {{--<script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.date.extensions.js')!!}"></script>--}}
    {{--<script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.extensions.js')!!}"></script>--}}
    <script type="text/javascript" src="{!! asset('croppie/croppie.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('js/sweet-alert.min.js')!!}"></script>
    {{--<script type="text/javascript" src="{!! asset('camera/respond.min.js')!!}"></script>--}}
    {{--<script type="text/javascript" src="{!! asset('camera/html5shiv.js')!!}"></script>--}}
    {{--<script type="text/javascript" src="{!! asset('camera/jpeg_camera_with_dependencies.min.js')!!}"></script>--}}
    {{--<script type="text/javascript" src="{!! asset('camera/validacao.js')!!}"></script>--}}


    <script type="text/javascript">

        $(document).ready(function() {
            /*Fotografia*/
            $('#openModal').on('click',function () {
                $('#modalFoto').modal({
                    show: true,
                    backdrop: "static"
                });
            });

            $('#btnUpload').click(function () {
                $('#karFoto').carousel(0);
            });
            $('#btnCamera').click(function () {
                $('#karFoto').carousel(1);
                var options = {
//                    shutter_ogg_url: "jpeg_camera/shutter.ogg",
//                    shutter_mp3_url: "jpeg_camera/shutter.mp3",
//                    swf_url: "jpeg_camera/jpeg_camera.swf"
                };
//                var camera = new JpegCamera("#FotoCam", options);
            });

            /*Inputs*/

            $("input").on('keyup',function() {
                if ($(this).length > 0) {
                    $(this).css({"border-bottom": "1px solid #a0a2a6"});
                }
            });
            $("input#dataN").on('change',function() {
                if ($(this).length > 0) {
                    $(this).css({"border-bottom": "1px solid #a0a2a6"});
                }
            });

            $('#btnNext').click(function () {
                var ctl = true;
                var apelido = $('#apelido').val().trim();
                var nome = $('#name').val().trim();
                var natulidade = $('#naturalidade').val().trim();
                var numBi = $('#numBi').val().trim();
                var residencia = $('#residencia').val().trim();
                var contacto = $('#contacto').val().trim();
                var dataNas = $('#dataN').val().trim();
                if(apelido ===''){
                    $("input#apelido").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(nome ===''){
                    $("input#name").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(natulidade ===''){
                    $("input#naturalidade").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(numBi ===''){
                    $("input#numBi").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(residencia ===''){
                    $("input#residencia").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(contacto ===''){
                    $("input#contacto").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(contacto ===''){
                    $("input#contacto").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }
                if(dataNas ===''){
                    $("input#dataN").css({"border-bottom": "1px solid #EE6464"});
                    ctl =false;
                }

                if(ctl === true) {
                    $('#Kar').carousel(1);
                }else{
                    $('#modalErro').modal({
                        show: true,
                        backdrop: "static"
                    });
                }
            });

            $('#check2').change(function () {
                if ($(this).is(':checked')) {
                    document.getElementById('listDisc2').removeAttribute('disabled');
                    document.getElementById('numDis').value=2;
                } else {
                    document.getElementById('numDis').value=1;
                    document.getElementById('listDisc2').setAttribute('disabled', 'true');
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
            document.getElementById('id').value = lastId+1;

            $uploadCrop = $('#upload-demo').croppie({
                enableExif: true,
                viewport: {
                    width: 150,
                    height: 150
//                    type: 'square'
                },
                boundary: {
                    width: 350,
                    height: 200
                }
            });
            var reader = new FileReader();

            $('#imgUpoad').on('change', function () {
                reader.onload = function (e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    }).then(function () {
                        console.log('Foto Carregada com sucesso');
                    });
                };
                reader.readAsDataURL(this.files[0]);
            });

            $('#btnSendImage').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (resp) {

                    $.ajax({
                        url: "api/criarFoto",
                        type: "POST",
                        data: {"image":resp,"codigo":password},
                        success: function () {
                            var html = '<img class="img-rounded" src="' + resp + '" />';
                            $("#uploadLast").html(html);
                        }
                    });
                });
            });
        });
    </script>
@endsection

