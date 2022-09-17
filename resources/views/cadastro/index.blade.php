@extends('base.base')
@section('conteudo')
<h1>Cadastros
    -
    <a href="{{route('cadastro.create')}}" class="btn btn-success">
        Novo cadastro</a>
</h1>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Observações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cadastros as $cadastro)
            
        
        <tr>
            <td>
                <a class="btn btn-danger"
                    href="{{route('cadastro.show', ['id'=>$cadastro->id])}}">
                    Ver
                </a>
                <a class="btn btn-dark"
                    href="{{route('cadastro.edit', ['id'=>$cadastro->id])}}">
                    Editar
                </a>
                <a class="btn btn-warning"
                    href="{{route('cadastro.destroy', ['id'=>$cadastro->id])}}">
                    Delete
                </a>
            </td>
            <td>{{$cadastro->nome;}}</td>
            <td>{{$cadastro->email;}}</td>
            <td>{{!! $cadastro->nome !!}}</td>
        </tr>
        @endforeach
    </tbody>

</table>    
@endsection