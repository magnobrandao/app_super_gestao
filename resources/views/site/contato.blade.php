@extends('site.layouts.basic')

@section('title', 'Contato')

@section('content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            @component('site.layouts._components.form_contato', ['classe' => 'borda-preta', 'motivo_contatos' => $motivo_contatos])





            @endcomponent
        </div>
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
