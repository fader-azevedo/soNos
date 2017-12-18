<table class="table-striped" id="tabela1">
    <thead>
    <tr>
        <th style="width: 10%">Fotografia</th>
        <th style="width: 30%">Nome Completo</th>
        <th style="width: 20%">Sexo</th>
        <th style="width: 20%">Num BI</th>
        <th style="width: 20%">Data Nasc</th>
    </tr>
    </thead>
    <tbody id="tabela1Corpo" class="dados">
        @foreach($candidato  as $ms)
            <tr>
                <td>
                    <img src="{{asset('img/alunos/').'/'.$ms->foto}}" class="img-circle " width="50" height="50">
                </td>
                <td>{{$ms->nome.' '.$ms->apelido}}</td>
                <td>{{$ms->sexo}}</td>
                <td>{{$ms->numBi}}</td>
                <td>{{$ms->dataNasc}}</td>

                <td><a class="btn btn-info btn-ver" data-id="{{$ms->id}}"><i class="zmdi zmdi-eye"></i>&nbsp;</a></td>
                <td><a class="btn btn-warning"><i class="fa fa-check"></i></a></td>
                <td><a class="btn btn-danger"><i class="zmdi zmdi-delete"></i>&nbsp;</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<h6 class="center">{{$candidato->links()}}</h6>
