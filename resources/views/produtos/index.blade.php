@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<b>LISTA DE PRODUTOS</b><br><br>			
            <ul style="list-style: none">
            @foreach($produtos as $produto)
                <li>
                {{ $produto->nome }} - {{ $produto->marca }} - <a href="{{ route('editproduto', [$produto->id]) }}"> Editar</a> - <a href="{{ route('apagarproduto', [$produto->id]) }}"> Excluir</a>
                </li>
            @endforeach
            </ul>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection