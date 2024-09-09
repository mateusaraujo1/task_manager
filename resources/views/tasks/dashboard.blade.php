@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    
    <div class="list-cards col-10 offset-1">
        @foreach ($tasks as $task)
            <div class="card">
                <div id="title" class="card-header text-truncate">{{$task->title}} 
                    <button data-bs-toggle="modal" data-bs-target="#modal-{{$task->id}}" class="position-absolute end-0 m-1">
                        <ion-icon name="expand-outline"></ion-icon>
                    </button>
                </div>
                
                
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{date('d/m/Y', strtotime($task->date))}}</h6>
                    
                    <p class="card-text text-truncate-4 text-justify">{{$task->description}}</p>
                    
                    <div class="card-buttons d-flex justify-content-between position-absolute bottom-0 start-0 end-0 p-3">

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalEdit-{{$task->id}}">
                            <ion-icon name="create-outline"></ion-icon>
                        </button>

                        <form action="tasks/delete/{{$task->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>

                    </div>
                </div>

                @include('layouts.show')
                @include('layouts.edit')
            </div>
            @endforeach

    </div>

    <button data-bs-toggle="modal" data-bs-target="#modal-create" class="position-fixed end-0 m-1">
        <ion-icon name="expand-outline">teste</ion-icon>
    </button>
    
    @include('layouts.create')

@endsection