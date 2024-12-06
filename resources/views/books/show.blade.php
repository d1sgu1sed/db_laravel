@extends('layouts.app')

@section('content')
    <h1>{{ $book->name }}</h1>
    <p><strong>Author:</strong> {{ $book->author->name ?? 'Unknown' }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Cost:</strong> ${{ $book->cost }}</p>
    <p><strong>Published Year:</strong> {{ $book->year }}</p>

    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
