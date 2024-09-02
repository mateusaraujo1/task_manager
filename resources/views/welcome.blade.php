@extends('layouts.main')

@section('title', 'Task Manager')

@section('content')

    @guest
        <p>Você não está logado</p>
    @endguest

    @auth
        <p>Você está logado</p>
    @endauth
    
@endsection