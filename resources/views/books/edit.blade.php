@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Book Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $book->name }}" required>
        </div>

        <div class="form-group">
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{ $book->isbn }}">
        </div>

        <div class="form-group">
            <label for="cost">Cost:</label>
            <input type="number" name="cost" id="cost" class="form-control" step="0.01" value="{{ $book->cost }}">
        </div>

        <div class="form-group">
            <label for="year">Year of Publication:</label>
            <input type="number" name="year" id="year" class="form-control" min="1000" value="{{ $book->year }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
@endsection
