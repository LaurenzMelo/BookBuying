@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin_sidebar')

        @include('admin_content')
    </div>
</div>
@endsection
