@extends('home')
@section('conteudo')

    <section style="position: relative;">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-money"></i>&nbsp; Candidatos</a></li>
        </ol>
    </section>

        <table class="table-striped" id="tabela1">
            <thead>
            <tr>
                <th >Fotografia</th>
                <th >Nome Completo</th>
                <th >Sexo</th>
                <th >Data Nasc</th>
            </tr>
            </thead>
            <tbody id="tabela1Corpo">
            @foreach($candidato  as $ms)
                <tr>
                    <td>
                        <img src="{{asset('img/alunos/').'/foto_'.$ms->foto}}" class="img-circle " width="50" height="50">
                    </td>
                    <td>{{$ms->nome.' '.$ms->apelido}}</td>
                    <td>{{$ms->sexo}}</td>
                    <td>{{$ms->dataNasc}}</td>

                    <td><a class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-danger"><i class="zmdi zmdi-delete"></i>&nbsp;</a></td>
                    <td><a class="btn btn-info btn-ver" data-id="{{$ms->id}}"><i class="zmdi zmdi-eye"></i>&nbsp;</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection

@section('scripts')
    <script>
        $('#li-Candidato').addClass('active');
    </script>
@endsection