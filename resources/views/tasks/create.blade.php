@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Create New Task</h1>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3"> Back to List </a>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">  Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> Description </label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> Create Task </button>
    </form>
</div>
@endsection
