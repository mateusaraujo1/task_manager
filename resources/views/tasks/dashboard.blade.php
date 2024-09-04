@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    
    <div class="list-cards col-10 offset-1">
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-header text-truncate">{{$task->title}}</div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{date('d/m/Y', strtotime($task->date))}}</h6>

                    <p class="card-text text-truncate-4">{{$task->description}}</p>

                    <div class="card-buttons d-flex justify-content-between position-absolute bottom-0 start-0 end-0 p-3">
                        <button class="btn btn-info"><ion-icon name="create-outline"></ion-icon></button>
                        <button class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection