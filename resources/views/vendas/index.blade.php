@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>LISTA DE VENDAS</b><br><br>
			
            <ul style="list-style: none">
            @foreach($vendas as $venda)
                <li>
                    Produto:  {{ $venda->Produto->nome }} , Marca:  {{ $venda->Produto->marca }} ,Vendido ao cliente:  {{ $venda->Cliente->id }} - <a href="{{ route('editvenda', [$venda->id]) }}"> Editar</a> - <a href="{{ route('apagarvenda', [$venda->id]) }}"> Excluir</a>
                </li>
            @endforeach
            </ul>
            <br>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection