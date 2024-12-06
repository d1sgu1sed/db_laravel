@extends('layouts.app')

@section('content')
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Book Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" class="form-control">
        </div>

        <div class="form-group">
            <label for="cost">Cost:</label>
            <input type="number" name="cost" id="cost" class="form-control" step="0.01">
        </div>

        <div class="form-group">
            <label for="year">Year of Publication:</label>
            <input type="number" name="year" id="year" class="form-control" min="1000" max="{{ date('Y') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Book</button>
    </form>
@endsection
