@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>REGISTRAR VENDAS</b><br><br><br>
			<form method="post" action=" {{route('vendas')}} ">

				@csrf
				
                Funcionário: 
				<select name="id_funcionario">
                    @foreach($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->user->name }}</option>
                    @endforeach
                 </select></br></br>
                 Produto:
                 <select name="id_produto">
                    @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                 </select></br></br>
                <input type="number" placeholder="Quantidade" name="quantidade"/> </br></br>
                Cliente: 
                <select name="id_cliente">
                    @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->user->name }}</option>
                    @endforeach
                 </select></br></br>
			    
			    <input type="submit" id="botao" value="Cadastrar"/>

			</form>
            <br>
          <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection

