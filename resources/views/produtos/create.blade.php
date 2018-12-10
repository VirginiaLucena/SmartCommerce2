@extends('layouts.layout1');
@section('img')
@section('conteudo')
		<center><div id="formu">
			<br>
			<br>
			<b>PRODUTOS</b><br><br>
			<form method="post" action=" {{url('produtos')}} ">

				@csrf

				 <input type="text" placeholder="Nome" name="nome"/></br></br>
				 <input type="text" placeholder="Marca" name="marca"/></br></br>
                 <select name="id_fornecedor">
                    @foreach($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->user->name }}</option>
                    @endforeach
                 </select></br></br>
				 <input type="number" placeholder="Preço" name="preco"/></br></br>
				    <input type="submit" id="botao" value="Cadastrar"/>

			</form>
            <br>
           <input type="button" href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
		</div></center>
@endsection
		

