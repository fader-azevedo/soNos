<table class="table-striped" id="tabela1">
    <thead>
    <tr>
        <th >Fotografia</th>
        <th >Nome Completo</th>
        <th >Sexo</th>
        <th >Num BI</th>
        <th >Data Nasc</th>
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
        {{$candidato->links()}}
    </tbody>
</table>
