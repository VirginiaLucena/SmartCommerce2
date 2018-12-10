@extends('layouts.layout2');
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

        <div class="flex-center position-ref full-height">
             <div class="content">
                <img src="https://yata.ostr.locaweb.com.br/2befa8f6de61a912dda5ad63cf8c0e7eb41705f5ba917cc7d5cce3378560059f" style="width:250px;height:250px; ">
                <div class="title m-b-md">
                    SmartCommerce
                </div>
                
                <div class="links">
                    <a href="{{route('menu')}}">MENU</a>
                   
                </div>
            </div>
        </div>
@endsection
