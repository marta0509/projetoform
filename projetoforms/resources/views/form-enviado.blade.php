@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através de form
@endsection
@section('conteudo')
	<b>Nome:</b>{{$nome}}<br>
	<b>Morada:</b>{{$morada}}<br>
	<b>Automóvel:</b>{{$automovel}}
@endsection