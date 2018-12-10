@extends('layouts.layout3');
@section('img')
@section('conteudo')
        <div class="dropdown-menu dropdown-menu-left" align="right" aria-labelledby="navbarDropdown">
            <button class="dropdown-item" href="{{ route('logout') }}" style="background-color:#F0FFFF;"onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
        <center><div id="formu">
            <br>
                <b>MENU</b></br></br>
                <a href="{{ route('cadastrarfuncionario') }}">Novo Funcionário</a> - <a href="{{ route('funcionarios') }}">Listar Funcionários</a></br></br>
                <a href="{{ route('cadastrarfornecedor') }}">Novo Fornecedor</a> - <a href="{{ route('fornecedores') }}">Listar Fornecedores</a></br></br>
                <a href="{{ route('cadastrarcliente') }}">Novo Cliente</a> - <a href="{{ route('clientes') }}">Listar Clientes</a></br></br>
                <a href="{{ route('cadastrarproduto') }}">Novo Produto</a> - <a href="{{ route('produtos') }}">Listar Produtos</a></br></br>
                <a href="{{ route('cadastrarvenda') }}">Nova Venda</a> - <a href="{{ route('vendas') }}">Listar Vendas</a></br></br>
                <input type="button" href="{{route('inicial')}}" value="Voltar para inicio" id="but" onClick="JavaScript: window.history.back();"/>
        </div></center>
@endsection
        
        
