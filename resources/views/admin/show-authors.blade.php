@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('admin_sidebar')

            <div class="col-md-9 bg-white shadow p-4" style="border-radius:20px">
                <div class="mb-3 ml-2 justify-content-center text-2xl color-text-dark font-weight-bold">
                    {{ $author->name }}
                    <a href="/admin/list-authors/{{$author->id}}/edit-authors" class="text-decoration-none float-right p-1 text-base btn-add"> Edit Author's Info </a>
                </div>
                <div class="text-lg">
                    <p class="mb-0"> Email: <a> {{ $author->email }} </a></p>
                    <p  class="mb-0"> Contact Number: {{ $author->contact_num }}</p>
                    <p class="mb-0"> Affiliation(s): {{ $author->affiliation }}</p>
                    <p class="mb-0"> Total downloads: {{ $author->total_downloads }} </p>
                    <p class="mb-0"> Unclaimed downloads: {{ $author->total_ubook }}</p>
                    <p class="mb-0 text-danger"> Unclaimed Profit:  {{ $author->unclaimed_downloads * 0.5 }}
                </div>

            </div>
        </div>
    </div>
@endsection
