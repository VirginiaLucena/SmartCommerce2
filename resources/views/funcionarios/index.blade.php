@extends('layouts.layout');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>LISTA DE FUNCIONÁRIOS</b><br><br>
            <ul style="list-style: none">
            @foreach($funcionarios as $funcionario)
                <li>
                {{ $funcionario->user->name }} - {{ $funcionario->user->email }} - <a href="{{ route('editfuncionario', [$funcionario->id]) }}"> Editar</a> - <a href="{{ route('apagarfuncionario', [$funcionario->id]) }}"> Excluir</a>
                </li>
            @endforeach
            </ul>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection