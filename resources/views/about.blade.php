@extends('layouts.layout')

@section('content')
    <div class="wrapper p-5">
        @include('navbar')
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 class="pl-2 color-text-dark font-weight-bold font-o-sans">About Us</h3>
                    <p class="text-justify pl-5  text-gray-700 font-mont" style="width:90%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit molestie aliquet. Nullam tempor ante at viverra placerat. Pellentesque sit amet purus at lorem imperdiet aliquam. Mauris fringilla suscipit quam nec efficitur. Aliquam erat volutpat. Sed eu semper ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas tristique, elit ac dignissim dictum, lectus metus vestibulum eros, et porttitor massa metus sed purus. Morbi laoreet molestie diam. Aliquam erat volutpat. Sed eu semper ex. Vestibulum ante ipsum primis in faucibus orci luctus et Pellentesque sit amet purus at lorem imperdiet aliquam. Mauris fringilla suscipit quam nec efficitur. Aliquam erat volutpat.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="pl-2 color-text-dark font-weight-bold font-o-sans">Vision</h3>
                    <p class="pl-5 p-2 text-gray-700 font-mont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet tellus libero, sed imperdiet erat lobortis id.</p>
                    <hr class="hr-fancy">

                    <h3 class="pl-2 color-text-dark font-weight-bold font-o-sans">Mission</h3>
                    <p class="pl-5 p-2  text-gray-700 font-mont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet tellus libero, sed imperdiet erat lobortis id. Aliquam et augue vitae tellus mattis faucibus eu sed enim.</p>
                    <hr class="hr-fancy">
                </div>
            </div>
            <h4 class="text-center mt-2 font-weight-bold color-text-dark font-oswald pb-2">Reach Us Here!</h4>
            <div class="row border shadow p-2 w-75 m-auto">
                <div class="col-md-12 col-xs-12">
                    <div class="justify-content-around d-flex">
                        <a href="https://www.facebook.com/LaurenzMelo" class="color-text-light text-2xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/LaurenzMelo" class="color-text-light text-2xl"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/laurenz-melosantos-5087481a7/" class="color-text-light text-2xl"><i class="fab fa-linkedin-in"></i></a>
                        <i class="far fa-envelope text-xl mt-2 color-text-light font-weight-bold"> stepijcsreditor@gmail.com</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
