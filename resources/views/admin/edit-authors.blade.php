@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl color-text-dark font-weight-bold">
                    <a class="text-decoration-none color-text-dark text-3xl mr-4" href="{{ route('authors.show', $author->id) }}"> <i class="fas fa-chevron-circle-left"></i> </a>
                    Edit {{ $author->name }}'s Information
                </div>

                <div>
                    <form method="POST" action="{{ route('authors.update',  $author->id) }}">
                        @csrf
                        @method('PUT')

                        <label class="mb-0 color-text-dark"> Author Name </label>
                        <input type="text" class="form-control mb-3" value="{{ $author->name }}" name="name" required>

                        <label class="mb-0 color-text-dark"> Email Address </label>
                        <input type="email" class="form-control mb-3" value="{{ $author->email }}" name="email" required>

                        <label class="mb-0 color-text-dark"> Affiliation(s) </label>
                        <input type="text" class="form-control mb-0" value="{{ $author->affiliation }}" name="affiliation" required>
                        <p class="mt-0 text-gray-700">Separate with comma (,) for every entry.</p>

                        <label class="mb-0 color-text-dark">Contact Number</label>
                        <input type="text" class="form-control mb-3" value="{{ $author->contact_num }}" name="contact_num" required>

                        <hr class="mt-4">
                        <button type="submit" class="btn btn-primary float-right" name="save-btn">Save changes</button>
                        <a href="{{ route('authors.show', $author->id) }}" type="button" class="btn btn-secondary float-right mr-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
