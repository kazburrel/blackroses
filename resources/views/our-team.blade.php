@extends('layout.index')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Team</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Our Team-->
    <section class="team-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h2>MEET OUR TEAM</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                <!--Default Team Member-->
                @forelse ($teamMembers as $teamMember)
                    <div class="default-team-member col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column">
                                <figure class="image">
                                    <a href="#">
                                        @if ($teamMember->image == 'images/resource/latoya_main.jpeg')
                                            <img src="images/resource/latoya_main.jpeg" alt="">
                                        @else
                                            <img src="{{ asset('storage/' . $teamMember->image) }}" alt="">
                                        @endif
                                    </a>
                                </figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>{{ $teamMember->fullname }}</h3>
                                    <p><b>{{ $teamMember->position }}</b></p>
                                    <div class="text">{{ $teamMember->write_up }}
                                    </div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                                        <a href="https://uk.linkedin.com/in/latoya-hughes-a91714217"><span
                                                class="fa fa-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>

        </div>
    </section>
@endsection
