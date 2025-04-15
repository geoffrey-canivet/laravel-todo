@extends('tasks_view.app')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">
                <i class="bi bi-pencil-square me-2 text-primary"></i>
                @if(empty($task)) Ajouter @else Modifier @endif une tâche
            </h2>
            <a href="{{ route('index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>Retour
            </a>
        </div>

        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <form action="{{ empty($task) ? route('task.store') : route('task.update', $task) }}" method="POST">
                    @csrf
                    @if(!empty($task))
                        @method('PUT')
                    @endif

                    <div class="mb-4">
                        <label for="nom" class="form-label fw-semibold">Nom de la tâche</label>
                        <input type="text" name="title" class="form-control" id="nom"
                               value="{{ old('title', $task->title ?? '') }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-semibold">Description de la tâche</label>
                        <textarea class="form-control" name="description" id="description" rows="4"
                                  required>{{ old('description', $task->description ?? '') }}</textarea>
                    </div>

                    <div class="form-check form-switch mb-4">
                        <input class="form-check-input" name="status" type="checkbox" id="status"
                            {{ !empty($task) && $task->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">Tâche terminée</label>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check2-circle me-1"></i>
                            @if(empty($task)) Ajouter @else Modifier @endif
                        </button>
                        <a href="{{ route('index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-x-circle me-1"></i>Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
