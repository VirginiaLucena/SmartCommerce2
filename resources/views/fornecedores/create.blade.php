@extends('layouts.layout');
@section('img')
@section('conteudo')
	<center><div id="formu">
		<br>
		<br>
		<b>CADASTRO DE FORNECEDORES</b><br><br><br>
		<form method="post" action=" {{route('fornecedores')}} ">
		@csrf

		<input type="text" placeholder="Nome" name="nome"/> </br><br>
        <input type="email" placeholder="E-mail" name="email"/> </br></br>
        <input type="text" placeholder="Telefone" name="telefone"/> </br></br>
		<input type="password" placeholder="Senha" name="senha"/> </br></br>
		<input id="botao" type="submit" value="Cadastrar"/><br><br>
    </form>
    <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
    </div></center>
@endsection
		