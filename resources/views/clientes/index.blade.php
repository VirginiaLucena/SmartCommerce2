@extends('layouts.layout');
@section('img')

@section('conteudo')
<center><div id="formu">
    <br>
    <br>
    <b>LISTA DE CLIENTES</b><br><br>
    
    <ul style="list-style: none">
    @foreach($clientes as $cliente)
        <li>
        {{ $cliente->user->name }} - {{ $cliente->user->email }} - <a href="{{ route('editcliente', [$cliente->id]) }}"> Editar</a> - <a href="{{ route('apagarcliente', [$cliente->id]) }}"> Excluir</a>
        </li>
    @endforeach
    </ul>
    <br>
    <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
    </div></center>   
@endsection

