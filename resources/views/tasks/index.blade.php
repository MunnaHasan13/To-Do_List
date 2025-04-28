@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4"> To-Do List </h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3"> Add Task </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> Title </th>
                <th> Description </th>
                <th> Status </th>
                <th> Actions </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    @if ($task->completed)
                        <span class="badge bg-success"> Completed </span>
                    @else
                        <span class="badge bg-warning"> Pending </span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-info"> Edit </a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this task?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                    </form>
                    <form action="{{ route('tasks.toggleComplete', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-secondary">
                            {{ $task->completed ? 'Mark Pending' : 'Mark Complete' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
