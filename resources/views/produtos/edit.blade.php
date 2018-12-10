@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>EDITAR PRODUTO</b><br><br>
			<form method="post" action=" {{url('atualizarproduto')}} ">

				@csrf

                <input type="hidden" name="id" value="{{ $produto->id }}"/>
				 <input type="text" placeholder="Nome" name="nome" value="{{ $produto->nome }}" /></br></br>
				 <input type="text" placeholder="Marca" name="marca" value="{{ $produto->marca }}" /></br></br>
                 <select name="id_fornecedor">
                    @foreach($fornecedores as $fornecedor)
                        @if($fornecedor->id==$produto->id_fornecedor)
                    <option selected="true" value="{{ $fornecedor->id }}">{{ $fornecedor->user->name }}</option>
                        @else
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->user->name }}</option>
                        @endif
                    @endforeach
                 </select></br></br>
				 <input type="number" placeholder="Preço" name="preco" value="{{ $produto->preco }}" /></br></br>
				    <input type="submit" id="botao" value="Cadastrar"/>

			</form>
            <br>
           <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection
		

