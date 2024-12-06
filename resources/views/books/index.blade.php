@extends('layouts.app')

@section('content')
    <h1>Books</h1>

    <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>

    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->name }} by {{ $book->author->name ?? 'Unknown' }}
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                <a href="{{ route('books.show', $book->id) }}">Show</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

            </li>
        @endforeach
    </ul>
@endsection
