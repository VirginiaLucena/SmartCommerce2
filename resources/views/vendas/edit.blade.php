@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>REGISTRAR VENDAS</b><br><br><br>
			<form method="post" action=" {{route('atualizarvenda')}} ">

				@csrf

                <input type="hidden" name="id" value="{{ $venda->id }}">
				
                Funcionário:
				<select name="id_funcionario">
                    @foreach($funcionarios as $funcionario)
                        @if($funcionario->id==$venda->id_funcionario)
                    <option selected="true" value="{{ $funcionario->id }}">{{ $funcionario->user->name }}</option>
                        @else
                    <option value="{{ $funcionario->id }}">{{ $funcionario->user->name }}</option>
                        @endif
                    @endforeach
                 </select></br></br>
                 Produto:
                 <select name="id_produto">
                    @foreach($produtos as $produto)
                        @if($produto->id==$venda->id_produto)
                    <option selected="true" value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @else
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endif
                    @endforeach
                 </select></br></br>
                <input type="number" placeholder="Quantidade" name="quantidade" value="{{ $venda->quantidade }}" /> </br></br>
                Cliente: 
                <select name="id_cliente">
                    @foreach($clientes as $cliente)
                        @if($cliente->id==$venda->id_cliente)
                    <option selected="true" value="{{ $cliente->id }}">{{ $cliente->user->name }}</option>
                        @else
                    <option value="{{ $cliente->id }}">{{ $cliente->user->name }}</option>
                        @endif
                    @endforeach
                 </select></br></br>
			    
			    <input type="submit" id="botao" value="Salvar"/>

			</form>
            <br>
            <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection

