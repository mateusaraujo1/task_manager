<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/create.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/modal.css">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- ícones --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-info">

        <div class="container-fluid">

            <a class="navbar-brand nav-link" href="/">Task Manager</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex-md justify-content-end" id="navbarNavAltMarkup">
                <div class="itens-nav navbar-nav">
                    <a class="item-nav nav-link" aria-current="page" href="#">Início</a>

                    <a class="item-nav nav-link" aria-current="page" href="/tasks/create">Criar Tarefa</a>
                    
                    @auth
                        <a class="item-nav nav-link" href="/dashboard">Minhas Tarefas</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                               class="item-nav nav-link" 
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

    <main>
        @if(session('msg'))
            <p class="msg"> {{ session('msg') }}</p>
        @endif

        @yield('content')
    </main>


</body>

</html>
