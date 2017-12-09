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
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" autocomplete="off">
                        {{ csrf_field() }}
                        <div id="Kar" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div  class="carousel-inner" id="divKar">
                                <div class="item active">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <fieldset >
                                                <legend style="margin-bottom: -5px; font-size: 15px;" class="center">Fotografia</legend>
                                                <div class="input-group container-fluid">
                                                    <img style="cursor: hand"  height="128" width="128" id="fotoFinal" class="img-rounded center" src="{{asset('img/fotogr.jpg')}}">
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
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend style="margin-bottom: -25px; font-size: 15px;" class="center">Sexo</legend>
                                                <div class="input-field">
                                                    <input id="cke1" type="radio" checked class="form-control flat-red" name="sexo" value="Feminino">
                                                    <label for="cke1"><i></i>Feminino</label>

                                                    <div class="pull-right" style="margin-right: 30px">
                                                        <input id="cke2" type="radio" class="form-control flat-red" name="sexo" value="Masculino">
                                                        <label for="cke2"><i class=""></i>Masculino</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-sm-6 input-field">
                                            <input id="dataN" class="form-control" name="dataNasc" type="text" onfocus="(this.type='date')">
                                            <label for="dataN"><i class="zmdi zmdi-calendar"></i>&nbsp;Data de Nascimento <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 input-field" >
                                            <input id="bi" type="text" class="form-control" name="apelido" >
                                            <label for="bi"><i class="zmdi zmdi-format-list-numbered"></i>&nbsp;Numero de BI <i class="inputObrigatio">*</i></label>
                                        </div>
                                        <div class="col-sm-4 input-field">
                                            <input id="naturalidade" class="form-control" type="text" name="naturalidade">
                                            <label for="naturaldade"><i class="fa fa-location-arrow"></i>&nbsp;Naturalidade <i class="inputObrigatio">*</i></label>
                                        </div>
                                        <div class="col-sm-4 input-field">
                                            <input id="residencia" class="form-control" type="text" name="residencia">
                                            <label for="residencia"><i class="fa fa-map-marker"></i>&nbsp;Residencia <i class="inputObrigatio">*</i></label>
                                        </div>
                                    </div>

                                    <div class="row">

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
                                            <br/>
                                        </div>
                                    </div>

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
                                                    <div class="col-sm-2">
                                                        <select style="height: 36px"  id="numDis" class="form-control" name="numDis">
                                                            <option id="uma" value="1">Uma</option>
                                                            <option id="duas" value="2">Duas</option>
                                                        </select>
                                                        <br/>
                                                    </div>

                                                    <div class="col-sm-5">
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

                                            <button type="submit" class="btn btn-success right">&nbsp;&nbsp;&nbsp;Salvar&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <a class="btn btn-default" href="#Kar" data-slide-to="0"><i class="fa fa-chevron-circle-left but"></i>&nbsp;&nbsp;Voltar&nbsp;&nbsp;&nbsp;</a>
                    <a class="btn btn-default right"  href="#Kar" data-slide-to="1">Proximo &nbsp; <i class="fa fa-chevron-circle-right but"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

    {{--<script>--}}
        {{--})--}}
        {{--</script>--}}

@endsection

@section('scripts')
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.date.extensions.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('input-mask/jquery.inputmask.extensions.js')!!}"></script>
    <script>

        $('#fotoFinal').click(function () {
//            alert('');
        });


        $('[data-mask]').inputmask();
        $('#numDis').change(function () {
            var v = $(this).val();
            if(v === '2'){
                document.getElementById('listDisc2').removeAttribute('disabled');
                document.getElementById('check2').setAttribute('checked','true');
            }else{
                document.getElementById('listDisc2').setAttribute('disabled','true');
                document.getElementById('check2').removeAttribute('checked');
            }
        });

        $('#check2').change(function () {
            if($(this).is(':checked')){
                document.getElementById('listDisc2').removeAttribute('disabled');
                document.getElementById('duas').setAttribute('selected','true');
                document.getElementById('uma').removeAttribute('selected');
            }else{
                document.getElementById('listDisc2').setAttribute('disabled','true');
                document.getElementById('uma').setAttribute('selected','true');
                document.getElementById('duas').removeAttribute('selected');
            }
        });

        var ano = new Date().getFullYear();
        var numMes = new Date().getUTCMonth();
        if(numMes<10) {
            numMes = '0' + numMes;
        }
        var lastId = JSON.parse("{{json_encode($lastId)}}");
        var password = ano+'00'+lastId+''+numMes;
        document.getElementById('password').value = password;
        document.getElementById('password-confirm').value = password;
    </script>
@endsection

