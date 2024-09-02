<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/index/index.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="/">Task Manager</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex-md justify-content-end" id="navbarNavAltMarkup">
                <div class="itens-nav navbar-nav">
                    <a class="item-nav nav-link" aria-current="page" href="#">Início</a>
                    
                    @auth
                        <a class="item-nav nav-link" href="#">Minhas Tarefas</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                               class="nav-link" 
                               onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </form>
                    @endauth

                    @guest
                        <a class="item-nav nav-link" href="/login">Entrar</a>
                        <a class="item-nav nav-link" href="/register">Cadastrar</a>
                    @endguest

                    {{-- botar o dashboard nas tasks --}}
                </div>
            </div>

        </div>

    </nav>

    @yield('content')

</body>

</html>
