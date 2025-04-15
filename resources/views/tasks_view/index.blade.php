@extends('tasks_view.app')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Mes tâches</h2>
            <div>
                <a href="{{ route('task.create') }}" class="btn btn-success me-2">
                    <i class="bi bi-plus me-1"></i>Ajouter une tâche
                </a>
                <a href="{{ route('logout') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-box-arrow-right me-1"></i>Se déconnecter
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                <table class="table align-middle table-bordered table-hover">
                    <thead class="table-secondary">
                    <tr class="text-center">
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr class="text-center">
                            <td class="fw-semibold">{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                                @if($task->status == 1)
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle me-1"></i>Terminé
                                    </span>
                                @else
                                    <span class="badge bg-warning text-dark">
                                        <i class="bi bi-hourglass-split me-1"></i>En cours
                                    </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-outline-primary btn-sm me-1">
                                    <i class="bi bi-pencil-square me-1"></i>
                                </a>
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick="return confirm('Supprimer cette tâche ?')"
                                            class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash3 me-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($tasks->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center text-muted">Aucune tâche pour le moment.</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
