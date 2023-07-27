@extends('layout.principal')

@section('titulo', 'Home')

@section('navbar')
    <!--Parent serve para complementar o modelo (adicionar botão, lista...)-->
    @parent
    <p>Nova navbar</p>
@endsection

@section('conteudo')
    <p>Conteudo da Home</p>
@endsection
