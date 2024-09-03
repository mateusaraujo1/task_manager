@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


    <div id="task-create-container"
        class="col-10 offset-1
                col-md-6 offset-md-3
                col-lg-4 offset-lg-4"
        style="border: 1px solid red">
        <h2 class="mb-3">Crie sua tarefa</h2>

        <form action="/tasks/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row mb-2 mb-lg-4">
                <label for="title" class="col-lg-2">Tarefa:</label>
                <div class="col-12 col-lg-10">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Título da tarefa*"
                        required>
                </div>
            </div>

            <div class="form-group row mb-2 mb-lg-4">
                <label class="col-lg-2" for="date">Data:</label>
                <div class="col-6">
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>

            <div class="form-group row mb-2 mb-lg-4">
                <label class="col-2" for="description">Descrição:</label>
                <div class="col-md-max">
                    <textarea name="description" id="description" class="form-control" placeholder="Descrição da tarefa" required></textarea>
                </div>
            </div>

            <input id="button-create" type="submit" class="btn btn-dark col-12" value="Criar tarefa">

        </form>
    </div>


@endsection
