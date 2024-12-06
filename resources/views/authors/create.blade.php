@extends('layouts.app')

@section('content')
    <h1>Add New Author</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Author Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Author</button>
    </form>
@endsection
