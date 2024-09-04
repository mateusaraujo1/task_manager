<div class="modal fade" id="modal-{{$task->id}}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel title">{{$task->title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{$task->description}}</p>
                <p class="text-muted">{{date('d/m/Y', strtotime($task->date))}}</p>
            </div>
        </div>
    </div>
</div>