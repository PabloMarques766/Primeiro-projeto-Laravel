@extends('base.base')

@section('conteudo')

<h1>Nome: {{$cadastro->name }}</h1>
 
<p>
    <a href="mailto: {{$cadastro->email}}"></a>
        {{$cadastro->email}}
</p>
<p>
        {!! nl2br($cadastro->observacoes) !!}
</p>
@endsection