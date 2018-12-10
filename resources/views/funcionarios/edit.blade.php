@extends('layouts.layout');
@section('img')

@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>EDITAR FUNCIONÁRIO</b><br><br><br>
			<form method="post" action=" {{route('atualizarfuncionario')}} ">

				@csrf

                <input type="hidden" name="id" value="{{ $funcionario->id }}">
			    <input type="text" placeholder="Nome" name="nome" value="{{ $funcionario->user->name }}"/> </br></br>
			    <input type="email" placeholder="Email" name="email" value="{{ $funcionario->user->email }}"/> </br></br>
			    <input type="text" placeholder="Telefone" name="telefone" value="{{ $funcionario->user->telefone }}"/> </br></br>
                <input type="text" placeholder="CPF" name="cpf" value="{{ $funcionario->cpf }}"/> </br></br>
                <input type="number" placeholder="Salário" name="salario" value="{{ $funcionario->salario }}"/> </br></br>
                <input type="password" placeholder="Senha" name="senha"/> </br></br>
			    <input type="submit" id="botao" value="Salvar"/>

			</form>
            <br>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection