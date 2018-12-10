@extends('layouts.layout');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>EDITAR FORNECEDOR</b><br><br><br>
			<form method="post" action=" {{route('atualizarfornecedor')}} ">

				@csrf

                <input type="hidden" name="id" value="{{ $fornecedor->id }}">
			    <input type="text" placeholder="Nome" name="nome" value="{{ $fornecedor->user->name }}"/> </br></br>
			    <input type="email" placeholder="Email" name="email" value="{{ $fornecedor->user->email }}"/> </br></br>
			    <input type="text" placeholder="Telefone" name="telefone" value="{{ $fornecedor->user->telefone }}"/> </br></br>
                <input type="password" placeholder="Senha" name="senha"/> </br></br>
			    <input type="submit" id="botao" value="Salvar"/>

			</form>
            <br>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection