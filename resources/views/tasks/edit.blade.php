@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4"> Edit Task </h1>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3"> Back to List </a>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label"> Title </label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> Description </label>
            <textarea class="form-control" id="description" name="description" rows="3"> {{ $task->description }} </textarea>
        </div>
        <div class="mb-3">
            <label for="completed" class="form-label"> Status </label>
            <select class="form-control" id="completed" name="completed">
                <option value="0" {{ $task->completed ? '' : 'selected' }}> Pending </option>
                <option value="1" {{ $task->completed ? 'selected' : '' }}> Completed </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Update Task </button>
    </form>
</div>
@endsection
