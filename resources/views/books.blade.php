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
                    <div class="col-md-12 border shadow p-4">
                        <h2 class="font-weight-bold text-center font-oswald">E-BOOKS</h2>
                        <ul class="mt-4 font-mont">
                            <li>
                                <a href="#"> Book #1</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Book #2</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Book #3</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Book #4</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Book #5</a>
                                <p> Author: </p>
                            </li>
                        </ul>
                        <h4 class="text-center"> Pagination Here </h4>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="col-md-12 border shadow p-4">
                        <h2 class="font-weight-bold text-center font-oswald">JOURNALS</h2>
                        <ul class="mt-4 font-mont">
                            <li>
                                <a href="#"> Journal #1</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Journal #2</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Journal #3</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Journal #4</a>
                                <p> Author: </p>
                            </li>
                            <li>
                                <a href="#"> Journal #5</a>
                                <p> Author: </p>
                            </li>
                        </ul>
                        <h4 class="text-center"> Pagination Here </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
