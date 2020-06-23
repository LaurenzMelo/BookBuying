@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl color-text-dark font-weight-bold">
                    Edit the book "{{$book->title}}"
                </div>

                <form method="POST" action="/admin/list-books/{{ $book->id }}">
                    @csrf
                    @method('PUT')

                    <label class="mb-0 color-text-dark"> Digital Object Identifier </label>
                    <input type="text" class="form-control mb-3" name="doi" value="{{ $book->doi }}" readonly>

                    <label class="mb-0 color-text-dark"> Book Title </label>
                    <input type="text" class="form-control mb-3" value="{{ $book->title }}" name="title" required>

                    <label class="mb-0 color-text-dark"> Chapters </label>
                    <input type="text" class="form-control mb-3" value="{{ $book->chapters }}" name="chapters" required>

                    <label class="mb-0 color-text-dark">Authors</label>
                    <select class="form-control" name="author_id">
                        @foreach($authors as $author)
                            <option
                                value="{{ $author->id }}"
                                @if ($author->id == $book->author->id)
                                    {{'selected="selected"'}}
                                @endif
                            >
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    <p>If the author is not here, you have to create it <a href="list-authors">HERE</a> first.</p>

                    <label class="mb-0 color-text-dark"> Price </label>
                    <input type="number" class="form-control mb-5" value="{{ $book->price }}" name="price" required>

                    <button type="submit" class="btn btn-primary float-right" name="save-btn">Save changes</button>
                    <a href="/admin/list-books/{{ $book->id }}" type="button" class="btn btn-secondary float-right mr-2">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
