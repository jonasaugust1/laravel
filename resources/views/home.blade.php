@extends('layout.principal')

@section('titulo', 'Home')

@section('navbar')
    <!--Parent serve para complementar o modelo (adicionar botão, lista...)-->
    @parent
    <p>Nova navbar</p>
@endsection

@section('conteudo')
    <p>Conteudo da Home</p>

    @if(2 == 1)
        <p>é igual a 2</p>
    @elseif(2>1)
        <p>é maior que 1</p>
    @endif

    @for($i = 0; $i < 3; $i++)
        <p>For: {{$i}}</p>
    @endfor

    @foreach($usuarios as $usuario)
        <p>Nome: {{$usuario['nome']}}</p>
    @endforeach

    <!-- Vai testar se o array tem conteudo e se tiver vai imprimir os valores -->
    @forelse($livros as $livro)
        <p>Livro: {{$livro['nome']}}</p>

        @empty
        <p>Livros vazio</p>
    @endforelse

    <?php $i = 0; ?>

        @while($i <= 4)
            <p>Esse é o while {{$i++}}</p>
        @endwhile
@endsection
