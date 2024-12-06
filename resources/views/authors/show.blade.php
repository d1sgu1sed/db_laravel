@extends('layouts.app')

@section('content')
    <h1>{{ $author->name }}</h1>
    <p><strong>Books by this author:</strong></p>
    <ul>
        @foreach($author->books as $book)
            <li>{{ $book->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to Authors</a>
@endsection
