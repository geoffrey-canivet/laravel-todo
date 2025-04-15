@extends('tasks_view.app')

@section('content')

    <a href="{{ route('task.create') }}" class="btn btn-primary">Ajouter une tache</a>
    <a href="{{ route('logout') }}" class="btn btn-primary">Se déconnecter</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Déscription</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if($task->status == 1)
                            <span class="badge text-bg-success">Terminé</span>
                        @else
                            <span class="badge text-bg-warning">En cours</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('task.edit', $task->id)}}" class="btn btn-info">Modifier</a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('supprimer la tache?')" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
