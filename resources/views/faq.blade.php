@extends('layouts.layout')

@section('head-js')
    <script>
        $(document).ready(function(){
            $("#qp1").click(function(){
                $("#ap1").slideToggle();
            });
            $("#qp2").click(function(){
                $("#ap2").slideToggle();
            });
            $("#qp3").click(function(){
                $("#ap3").slideToggle();
            });
        });
    </script>
@endsection

@section('content')
    <div class="wrapper p-5 mw-100">
        @include('navbar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-xs-12 mt-4">
                    <h1 class="text-5xl mt-4 font-oswald"> Frequently Asked Questions</h1>
                    <p class="mb-5 text-gray-700 font-mont">We provide some common questions that we have received and we will possibly receive in the future. Have a look!</p>
                    <div class="text-center">
                        <h3 class="mt-4 font-o-sans">But first, why should you choose <span class="color-text-dark font-weight-bold">STEP</span>?</h3>
                        <p class="w-75 m-auto text-base text-gray-700 font-mont">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet tellus libero, sed imperdiet erat lobortis id. Aliquam et augue vitae tellus mattis faucibus eu sed enim. Quisque ut turpis quis est vestibulum tincidunt. Know more about us <a href="/about">HERE</a>.
                        </p>
                        <hr class="hr-break mb-5">
                    </div>
                    <div>
                        <h4 class="mt-4 color-text-dark font-weight-bold text-center font-o-sans">GENERAL QUESTIONS</h4>
                        <div class="m-auto">
                            <div id="qp1" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 1</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap1">Answer</p>
                            <div id="qp2" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 2</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap2">Answer</p>
                            <div id="qp3" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 3</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap3">Answer</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h4 class="mt-4 color-text-dark font-weight-bold text-center font-o-sans">PRICING</h4>
                        <div class="m-auto">
                            <div id="qp1" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 1</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap1">Answer</p>
                            <div id="qp2" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 2</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap2">Answer</p>
                            <div id="qp3" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 3</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap3">Answer</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h4 class="mt-4 color-text-dark font-weight-bold text-center font-o-sans">HOW TO</h4>
                        <div class="m-auto">
                            <div id="qp1" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 1</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap1">Answer</p>
                            <div id="qp2" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 2</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap2">Answer</p>
                            <div id="qp3" class="questions">
                                <h5 class="p-2 border-bottom l-spacing">QUESTION 3</h5>
                            </div>
                            <p class="pl-2 faq-answer" id="ap3">Answer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 overflow-hidden">
                    <img src="images/lappy.png" width="700" height="500" alt="laptop" class="mt-2 ml-0">
                    <img src="images/faq-book.png" height="500" width="700" alt="books">
                </div>
            </div>
        </div>
    </div>
@endsection
