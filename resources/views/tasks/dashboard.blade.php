@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    
    <div class="list-cards col-10 offset-1">
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-header text-truncate">{{$task->title}}</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{date('d/m/Y', strtotime($task->date))}}</h6>

                    <p class="card-text text-truncate-6">{{$task->description}}</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection