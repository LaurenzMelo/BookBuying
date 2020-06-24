@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl">
                    List of Authors
                    <button data-toggle="modal" data-target="#addAuthor" class="text-decoration-none float-right p-1 text-base btn-add"> Add An Author! </button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @forelse($authors as $author)
                            <div>
                                <ul>
                                    <li>
                                        <a href="{{ route('authors.show', $author->id) }}"
                                           class="mb-0 text-base text-decoration-none
                                           color-text-dark font-weight-bold">
                                            {{ $author->name }}
                                        </a>

                                        <form method="POST" action="{{ action('Admin\AuthorsController@destroy', $author->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="float-right border-0 mt-0 bg-white text-2xl">
                                                <i class="far fa-times-circle x-btn mt-0"></i>
                                            </button>
                                        </form>


                                        <p class="mb-0"> Email: <a> {{ $author->email }} </a></p>
                                        <p class="mb-0"> Total downloads: {{ $author->total_downloads }} </p>
                                        <p class="mb-0"> Unclaimed downloads: {{ $author->total_ubook }}</p>
                                        <p class="mb-0 text-danger"> Unclaimed Profit:  {{ $author->unclaimed_downloads * 0.5 }} <a href=""> </a></p>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <p> No authors yet. </p>
                        @endforelse

                        {{ $authors->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addAuthor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title color-text-dark font-weight-bold" id="exampleModalLabel">Add Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('authors.create') }}">
                        @csrf

                        <label class="mb-0 color-text-dark"> Author Name </label>
                        <input type="text" class="form-control mb-3" placeholder="Full Name" name="name" required>

                        <label class="mb-0 color-text-dark"> Email Address </label>
                        <input type="email" class="form-control mb-3" placeholder="Email@example.com" name="email" required>

                        <label class="mb-0 color-text-dark"> Affiliation(s) </label>
                        <input type="text" class="form-control mb-0" placeholder="Affiliations" name="affiliation" required>
                        <p class="mt-0 text-gray-700">Separate with comma (,) for every entry.</p>

                        <label class="mb-0 color-text-dark">Contact Number</label>
                        <input type="text" class="form-control mb-3" placeholder="09XXXXXXXXX" name="contact_num" required>

                        <hr class="mt-4">
                        <button type="submit" class="btn btn-primary float-right" name="save-btn">Save changes</button>
                        <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                    </form>

                    @error('email')
                        <p class="text-red-500 text-sm"> {{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
@endsection
