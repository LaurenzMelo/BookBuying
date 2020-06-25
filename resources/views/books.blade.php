@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-5 mw-100">
        @include('navbar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 text-center">
                    <img src="images/mg.gif"
                         alt="search-magnifying-glass"
                         width="500"
                         height="300"
                    >
                    <p class="mt-0 text-base font-weight-bold font-mont">Find it. Buy it. <br> Learn it. Enjoy it.</p>
                </div>
                <hr class="hr-break">
            </div>
            <div class="row mt-5">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-12 border shadow p-3 mb-3">
                        <form method="" action="POST">
                            <input type="text" placeholder="Search Here" name="search_book" class="search-book p-2">
                            <button class="btn-submit p-2 pl-3 pr-3" name="submit_but"><i class="fas fa-search"></i></button>
                        </form>
                        <p class="mb-0 mt-1 font-mont">You can search the title or the author of the book/journal here.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-xs-12">
                    <div class="col-md-12 border shadow p-4" style="height: 520px">
                        <h2 class="font-weight-bold text-center font-oswald mb-4">E-BOOKS</h2>
                        @foreach ($books as $book)
                            <div>
                                <ul class="font-mont">
                                    <li>
                                        <a href="{{ route('user.show', $book->id) }}"
                                           class="mb-0 text-base
                                           text-decoration-none
                                           ">
                                            {{ $book->title }}
                                        </a>
                                        <p class="mb-0"> Author: <a> {{ $book->author->name }} </a> </p>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                        {{ $books->links() }}
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="col-md-12 border shadow p-4" style="height: 520px">
                        <h2 class="font-weight-bold text-center font-oswald">JOURNALS</h2>
                        @foreach ($journals as $journal)
                            <div>
                                <ul class="font-mont">
                                    <li>
                                        <a href="{{ route('user.show', $journal->id) }}"
                                           class="mb-0 text-base
                                           text-decoration-none
                                           ">
                                            {{ $journal->title }}
                                        </a>
                                        <p class="mb-0"> Author: <a> {{ $journal->author->name }} </a> </p>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                        {{ $journals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
