@extends('layouts.layout');
@section('img')
@endsection
@section('conteudo')
<center><div id="formu">
    <br>
    <br>
    <b>CADASTRO DE CLIENTES</b><br><br><br>
    <form method="post" action=" {{route('clientes')}} ">

        @csrf

        <input type="text" placeholder="Nome" name="nome"/> </br></br>
        <input type="email" placeholder="Email" name="email"/> </br></br>
        <input type="text" placeholder="Telefone" name="telefone"/> </br></br>
        <input type="password" placeholder="Senha" name="senha"/> </br></br>
        <input type="submit" id="botao" value="Cadastrar"/>

    </form>
    <br> <br>
    <input type="button"  href="{{route('menu')}}" value="Voltar" id="but" onClick="JavaScript: window.history.back();"/>
</div></center>
@endsection