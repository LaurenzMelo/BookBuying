@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl">
                    List of Journals
                    <button data-toggle="modal" data-target="#addJournals" class="text-decoration-none float-right p-1 text-base btn-add"> Add A Journal! </button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @forelse($journals as $journal)
                            <div>
                                <ul>
                                    <li>
                                        <a href="{{ route('journals.show', $journal->id) }}"
                                           class="mb-0 text-base
                                           text-decoration-none color-text-dark
                                           font-weight-bold">
                                            {{ $journal->title }}
                                        </a>
                                        <form method="POST" action="{{ action('Admin\JournalsController@destroy', $journal->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="float-right border-0 bg-white text-2xl">
                                                <i class="far fa-times-circle  x-btn"></i>
                                            </button>
                                        </form>

                                        <p class="mb-0"> Digital Object Identifier: {{ strtoupper($journal->doi) }} </p>
                                        <p class="mb-0"> Author: <a> {{ $journal->author->name }} </a> </p>
                                        <p class="text-danger"> Unclaimed Downloads: {{ $journal->unclaimed_download  }}</p>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <p> No journals yet. </p>
                        @endforelse

                        {{ $journals->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addJournals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title color-text-dark font-weight-bold" id="exampleModalLabel">Add A Journal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('journals.create') }}">
                        @csrf
                        <label class="mb-0 color-text-dark"> Digital Object Identifier </label>
                        <input type="text" class="form-control mb-3" placeholder="DOI" name="doi" required>

                        <label class="mb-0 color-text-dark"> Journal Title </label>
                        <input type="text" class="form-control mb-3" placeholder="Journal Title" name="title" required>

                        <label class="mb-0 color-text-dark">Authors</label>
                        <select class="form-control" name="author_id">
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}"> {{ $author->name }}</option>
                            @endforeach
                        </select>
                        <p>If the author is not here, you have to create it <a href="{{ route('authors.index') }}">HERE</a> first.</p>

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
