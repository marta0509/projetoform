@extends('layout')
@section('titulo-pesquisa')
A minha App
@endsection
@section('header')
Bem-Vindo
@endsection
@section('conteudo')
<h2>Esta é a minha primeira web APP Formulário em Laravel</h2>

<a href="{{route('mostrar.form')}}">Ir para o formulário</a>
@endsection