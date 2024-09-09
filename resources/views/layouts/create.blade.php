<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel title">Criar tarefa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/tasks/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Tarefa:</label>
                        <input class="form-control" type="text" id="title" name="title" placeholder="Nome da tarefa" required>
                    </div>
                    
                    <div class="form-group py-3">
                        <label for="date">Data:</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrição:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Descrição da tarefa" required></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-dark">Salvar</button>
                    </div>

                  </form>
            </div>
        </div>
    </div>
</div>