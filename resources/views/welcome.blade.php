@extends('layouts.main')

@section('title', 'Task Manager')

@section('content')

    @guest
        <div class="col-6 offset-3 text-center mt-4">
            <p>Você não está logado. Faça login <a href="/login">clicando aqui</a> ou <a href="/register">cadastre-se</a></p>
        </div>
    @endguest

    @auth
        <div class="col-6 offset-3 text-center mt-4">
            <p>Você está logado, <a href="/dashboard">clique aqui</a> para ver suas tarefas</p>
        </div>
    @endauth
    
@endsection