<table class="table-striped" id="tabela1">
    <thead>
    <tr>
        <th style="width: 10%">Fotografia</th>
        <th style="width: 30%">Nome Completo</th>
        <th style="width: 15%">Sexo</th>
        <th style="width: 20%">Num BI</th>
        <th style="width: 20%">Data Nasc</th>
        <th style="width: 20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Opções&nbsp;</th>
    </tr>
    </thead>
    <tbody id="tabela1Corpo" class="dados">
        @foreach($candidato  as $ms)
            <tr>
                <td style="width: 10%">
                    <img src="{{asset('img/alunos/').'/'.$ms->foto}}" class="img-circle " width="50" height="50">
                </td>
                <td style="width: 30%">{{$ms->nome.' '.$ms->apelido}}</td>
                <td style="width: 15%">{{$ms->sexo}}</td>
                <td style="width: 20%">{{$ms->numBi}}</td>
                <td style="width: 20%">{{$ms->dataNasc}}</td>

                <td style="width: 20%; display: flex">
                    <a class="btn btn-info btn-ver bt" data-id="{{$ms->id}}"><i class="zmdi zmdi-eye"></i></a>
                    <a class="btn btn-warning bt"><i class="zmdi zmdi-check"></i></a>
                    <a class="btn btn-danger bt"><i class="zmdi zmdi-delete"></i></a>
                </td>
                {{--<td style="width: 1.5%"></td>--}}
                {{--<td style="width: 2%"></td>--}}
            </tr>
        @endforeach
    </tbody>
</table>
<h6 class="center">{{$candidato->links()}}</h6>
