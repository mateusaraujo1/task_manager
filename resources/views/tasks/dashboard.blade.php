@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    
    <div class="list-cards col-10 offset-1">
        @foreach ($tasks as $task)
            <div class="card">
                <div id="title-{{$task->id}}" class="card-header text-truncate">{{$task->title}} 
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal-{{$task->id}}" class="position-absolute end-0 m-1">
                        <ion-icon name="expand-outline"></ion-icon>
                    </button>
                </div>
                
                
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{date('d/m/Y', strtotime($task->date))}}</h6>
                    
                    <p class="card-text text-truncate-4 text-justify">{{$task->description}}</p>
                    
                    <div class="card-buttons d-flex justify-content-between position-absolute bottom-0 start-0 end-0 p-3">
                        <a href="#" class="btn btn-dark"><ion-icon name="create-outline"></ion-icon></a>
                        <a href="#" class="btn btn-dark"><ion-icon name="trash-outline"></ion-icon></a>
                    </div>
                </div>

                @include('layouts.show')
            </div>
        @endforeach


    </div>

@endsection