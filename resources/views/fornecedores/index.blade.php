@extends('layouts.layout');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>LISTA DE FORNECEDORES</b><br><br>
			
            <ul style="list-style: none">
            @foreach($fornecedores as $fornecedor)
                <li>
                {{ $fornecedor->user->name }} - {{ $fornecedor->user->email }} - <a href="{{ route('editfornecedor', [$fornecedor->id]) }}"> Editar</a> - <a href="{{ route('apagarfornecedor', [$fornecedor->id]) }}"> Excluir</a>
                </li>
            @endforeach
            </ul>
            <br>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection