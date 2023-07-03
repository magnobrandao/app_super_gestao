@extends('site.layouts.basic')

@section('title', 'Sobre Nós')


@section('content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Olá, eu sou o Super Gestão feito por Magno Brandão</h1>
    </div>

    <div class="informacao-pagina">
        <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar empresas.</p>
        <p>Desenvolvido com a mais alta tecnologia para você cuidar do seu negócio!</p>
    </div>
</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{asset('img/facebook.png')}}">
        <img src="{{asset('img/linkedin.png')}}">
        <img src="{{asset('img/youtube.png')}}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(71) 99310-2615</span>
        <br>
        <span>magnoboc@gmail.com</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{asset('img/mapa.png')}}">
    </div>
</div>
@endsection
