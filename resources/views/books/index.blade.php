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
            </li>
        @endforeach
    </ul>
@endsection
