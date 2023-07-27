<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- @yield('titulo') vai mudar de acordo com o template -->
        <title>appTest - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <header>
            @section('navbar')
            <p>Navbar</p>
            @show
            <hr>
        </header>

        <main>
            <div>
                @yield('conteudo')
            </div>
        </main>

        <footer>
            <hr>
            @section('footer')
                @include('layout._includes._footer')
            @show
        </footer>
    </body>
</html>
