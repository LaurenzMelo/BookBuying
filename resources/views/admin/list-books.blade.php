@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-2 ml-2 justify-content-center text-2xl">
                    List of Books
                    <button data-toggle="modal" data-target="#addBooks" class="text-decoration-none float-right p-1 text-base btn-add"> Add A Book! </button>
                </div>
                <div class="mb-4">
                    <form action="{{ route('books.index') }}" method="get">
                        <input type="text" placeholder="Search Here" name="s" class="search-book p-2" value="{{ isset($s) ? $s : '' }}">
                        <button type="submit" class="btn-submit p-2 pl-3 pr-3"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @forelse($books as $book)
                            <div>
                                <ul>
                                    <li>
                                        <a href="{{ route('books.show', $book->id) }}"
                                           class="mb-0 text-base
                                           text-decoration-none color-text-dark
                                           font-weight-bold">
                                            {{ $book->title }}
                                        </a>
                                        <form method="POST" action="{{ action('Admin\BooksController@destroy', $book->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="float-right border-0 bg-white text-2xl">
                                                <i class="far fa-times-circle  x-btn"></i>
                                            </button>
                                        </form>

                                        <p class="mb-0"> Digital Object Identifier: {{ strtoupper($book->doi) }} </p>
                                        <p class="mb-0"> Author: <a> {{ $book->author->name }} </a> </p>
                                        <p class="text-danger"> Unclaimed Downloads: {{ $book->unclaimed_download  }}</p>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <p> No books yet. </p>
                        @endforelse

                        {{ $books->appends(['s' => $s])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addBooks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title color-text-dark font-weight-bold" id="exampleModalLabel">Add A Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('books.create') }}">
                        @csrf
                        <label class="mb-0 color-text-dark"> Digital Object Identifier </label>
                        <input type="text" class="form-control mb-3" placeholder="DOI" name="doi" required>

                        <label class="mb-0 color-text-dark"> Book Title </label>
                        <input type="text" class="form-control mb-3" placeholder="Book Title" name="title" required>

                        <label class="mb-0 color-text-dark"> Chapters </label>
                        <input type="text" class="form-control mb-3" placeholder="Number of Chapters" name="chapters" required>

                        <label class="mb-0 color-text-dark">Authors</label>
                        <select class="form-control" name="author_id">
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}"> {{ $author->name }}</option>
                            @endforeach
                        </select>
                        <p>If the author is not here, you have to create it <a href="list-authors">HERE</a> first.</p>

                        <label class="mb-0 color-text-dark"> Price </label>
                        <input type="number" class="form-control mb-3" placeholder="Price" name="price" required>

                        <hr class="mt-4">
                        <button type="submit" class="btn btn-primary float-right" name="save-btn">Save changes</button>
                        <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                    </form>

                    @error('title')
                        <p class="text-red-500 text-sm"> {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
