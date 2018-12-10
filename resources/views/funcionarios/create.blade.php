@extends('layouts.layout');
@section('img')

@section('conteudo')
	<center><div id="formu">
		<br>
			<b>CADASTRO DE FUNCIONÁRIOS</b><br><br><br>
			<form method="post" action=" {{url('funcionarios')}} ">
				@csrf		
				<input type="text" placeholder="Nome" name="nome"/> <br><br>
				<input type="email" placeholder="E-mail" name="email"/> <br><br>
                <input type="text" placeholder="Telefone" name="telefone"/> <br><br>
				<input type="password" placeholder="Senha" name="senha"/> </br></br>
				<input type="text" placeholder="CPF" name="cpf"/> </br><br>
				<input type="number" placeholder="Salário" name="salario"/> </br><br>
				<input type="submit" id ="botao" value="Cadastrar"/>
                <br><br>
                <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
			</form>
	</div></center>
@endsection
	
		
		
