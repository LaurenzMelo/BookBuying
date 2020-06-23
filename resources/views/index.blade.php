@extends('layouts.layout')

@section('content')
    <div class="container-fluid p-5 w-100 shadow bg-head">
        <nav class="navbar navbar-expand-lg pl-5">
            <a class="navbar-brand" href="/">
                <img src="images/step-logo.jpg" height="50px" width="120px" class="ml-2">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end text-base pr-5" id="navbarNav">
                <ul class="navbar-nav font-o-sans">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/books">BOOKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/faq">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/about">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-white text-5xl mt-5 ml-5 w-50 font-oswald">
            Redefining your e-book buying experience.
        </div>
        <div>
            <div class="mt-4 mb-5">
                <a href="#bottom" class="ml-5 font-oswald border-light bg-transparent text-white btn-head text-lg text-decoration-none">
                    LEARN MORE
                </a>
                <a href="/books" class="ml-2 font-oswald border-light bg-transparent text-white btn-head text-lg text-decoration-none">
                    GET STARTED
                </a>
            </div>
        </div>
    </div>

    <div class="border get-started position-absolute bottom-0 shadow p-3 pb-4">
        <p class="text-center color-text-dark font-mont"> Optimize Your Learning.</p>
        <h3 class="text-center font-weight-bold pb-4 w-75 m-auto font-o-sans">FIND THE PERFECT E-BOOK</h3>
        <center><a href="/books" class="color-theme-light font-oswald p-2 text-white text-decoration-none g-started-but">GET STARTED</a></center>

    </div>

    <div class="container w-100 mb-5 mt-10">
        <div class="text-center text-2xl font-weight-bold font-o-sans" id="bottom">
            Insert Something Here
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-10 p-3">
                <p class="text-justify text-indent text-base mt-4 font-mont">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit molestie aliquet. Nullam tempor ante at                   viverra placerat. Pellentesque sit amet purus at lorem imperdiet aliquam. Mauris fringilla suscipit quam nec                       efficitur. Aliquam erat volutpat. Sed eu semper ex. Vestibulum ante ipsum primis in faucibus orci luctus et                        ultrices posuere cubilia curae; Maecenas tristique, elit ac dignissim dictum, lectus metus vestibulum eros, et                     porttitor massa metus sed purus. Morbi laoreet molestie diam.
                </p>
            </div>
            <div class="col-md-2 p-3">
                <img src="images/image_holder.jpg" class="img-holder">
            </div>
        </div>

        <div class="row">
            <div class="w-100 mt-4 p-4 border shadow border-radius-sm">
                <h4 class="mb-4 font-o-sans">Featured Books</h4>
                <div class="row font-mont">
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                </div>
                <a href="#" class="float-right text-decoration-none text-base font-mont"> See More </a>

            </div>
        </div>

        <div class="row">
            <div class="w-100 mt-4 p-4 border shadow border-radius-sm">
                <h4 class="mb-4 font-o-sans">Featured Journals & Articles</h4>
                <div class="row  font-mont">
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                        <p class="text-center mt-1"> Title of the Book </p>
                    </div>
                </div>
                <a href="#" class="float-right text-decoration-none text-base font-mont"> See More </a>

            </div>
        </div>

        <div class="row">
            <div class="w-100 mt-4 p-4 border shadow border-radius-sm">
                <h4 class="mb-4 font-o-sans">Author of the Month</h4>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3">
                        <img src="images/image_holder.jpg" class="img-holder">
                    </div>
                    <div class="col-md-9">
                        <p class="text-justify text-indent text-base mt-1  font-mont" style="width:95%">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit molestie aliquet. Nullam tempor ante at viverra placerat. Pellentesque sit amet purus at lorem imperdiet aliquam. Mauris fringilla suscipit quam necefficitur. Aliquam erat volutpat. Sed eu semper ex. Vestibulum ante ipsum primis in faucibus orci luctus et                  ultrices posuere cubilia curae; Maecenas tristique, elit ac dignissim dictum, lectus metus vestibulum eros, et                   porttitor massa metus sed purus. Morbi laoreet   molestie diam.
                        </p>
                        <a href="#" class="float-right text-decoration-none text-base font-mont"> Know More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
