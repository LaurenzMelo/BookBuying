@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl color-text-dark font-weight-bold">
                    {{ $book->title }}
                    <a href="/admin/list-books/{{$book->id}}/edit-books" class="text-decoration-none float-right p-1 text-base btn-add"> Edit This Book </a>
                </div>
                <div class="ml-2 text-lg">
                    <img
                        src="{{ asset('images/image_holder.jpg') }}"
                        alt="Book Cover"
                        height="400px"
                        width="250px"
                        class="mb-5 mt-2"
                    >
                    <p class="mb-0"> Digital Object Identifier: {{ strtoupper($book->doi) }} </p>
                    <p class="mb-0"> Author: <a> {{ $book->author->name }} </a> </p>
                    <p class="mb-0"> No. of chapters: {{ $book->chapters }}</p>
                    <p class="mb-0"> Total Downloads: {{ $book->total_download }}</p>
                    <p class="text-danger mt-3"> Unclaimed Downloads: {{ $book->unclaimed_download  }}</p>
                    <p class="mt-5">Chapters:</p>
                    <ul>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
