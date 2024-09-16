@extends('layouts.main')

@section('title', 'Task Manager')

@section('content')

    <div class="col-6 offset-3 text-center mt-4">
        
    @guest
        <p>Você não está logado. Faça login <a href="/login">clicando aqui</a> ou <a href="/register">cadastre-se</a></p>
    @endguest

    @auth
        <p>Você está logado, <a href="/dashboard">clique aqui</a> para ver suas tarefas</p>
    @endauth

    </div>
    
@endsection