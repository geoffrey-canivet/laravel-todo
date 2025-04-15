@extends('tasks_view.app')

@section('content')

    <h2>
        @if(empty($task)) Ajouter @else Modifier @endif
        une tache.
    </h2>
    <form action="{{ empty($task) ? route('task.store') : route('task.update', $task) }}" method="POST">
        @csrf
        @if(!empty($task))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la tache</label>
            <input type="text" name="title" class="form-control" id="nom" value="{{ old('title', $task->title ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Déscription de la tache</label>
            <textarea class="form-control" name="description" id="description" rows="3">
                {{ old('description', $task->description ?? '') }}
            </textarea>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="status" type="checkbox" id="status" {{ !empty($task) && $task->status ? 'checked' : "" }}>
            <label class="form-check-label" for="status">
                Terminé
            </label>
        </div>

        <button type="submit" class="btn btn-info">
            @if(empty($task)) Ajouter @else Modifier @endif
        </button>
        <a href="{{route('index')}}" class="btn btn-primary">Annuler</a>
    </form>


@endsection
