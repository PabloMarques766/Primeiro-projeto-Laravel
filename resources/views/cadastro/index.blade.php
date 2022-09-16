@extends('base.base')
@section('conteudo')
<h1>Cadastros</h1>
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
            <td></td>
            <td>{{$cadastro->nome;}}</td>
            <td>{{$cadastro->email;}}</td>
            <td>{{!! $cadastro->nome !!}}</td>
        </tr>
        @endforeach
    </tbody>

</table>    
@endsection