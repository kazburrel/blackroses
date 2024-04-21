@php
    $setting = DB::table('settings')->first();
@endphp

@extends('layout.index')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Page Not Found</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">404 page not found</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Error Section-->
    <section class="error-section">
        <div class="auto-container">
            <figure class="error-image"><img src="{{ asset('images/resource/404-image.png') }}" alt=""></figure>
            <h3>We can’t find the page you’re looking for</h3>

            <!--btn box-->
            <div class="btn-box">
                <a class="theme-btn btn-style-two" href="{{ route('home') }}"><span class="flaticon-home"></span> go to
                    home</a>
            </div>
        </div>
    </section>
@endsection
