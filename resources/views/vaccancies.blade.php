@extends('layout.index')

@section('content')
    <style>
        .numbered-list {
            counter-reset: list-counter;
        }

        .numbered-list p {
            counter-increment: list-counter;
        }

        .numbered-list p:before {
            content: counter(list-counter) ". ";
        }
    </style>
    <section class="recent-causes-section">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>Welcome to Black Roses Support - Your Opportunity Awaits!</h2>
                <div class="separator"></div>
                <div class="desc-text">At Black Roses Support, we believe in empowering individuals to make a difference in
                    the lives of others. Our mission is to provide unparalleled support and care to those in need, fostering
                    a community of compassion, understanding, and growth.
                </div>

            </div>

            <div class="numbered-list">
                <h3 style="text-align: center; color: #fa6f1c;"><b>Why Choose Us?</b></h3>
                <p><b>Commitment to Excellence:</b> We strive for excellence in everything we do, from providing top-notch
                    support to our clients to fostering a supportive and inclusive work environment for our team
                    members.
                </p>
                <p>
                    <b>Opportunities for Growth:</b> At Black Roses Support, we value personal and professional development.
                    We
                    offer ongoing training and advancement opportunities to help our team members reach their full
                    potential.
                </p>
                <p>
                    <b>Making a Difference:</b> By joining our team, you'll have the opportunity to make a real difference
                    in
                    the lives of individuals and families in our community. Every day, you'll have the chance to
                    positively impact someone's life.
                </p>
            </div>

            <div class="row clearfix">
                <!--Default Cause Box-->
                @forelse ($vaccancies as $vaccancy)
                    <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">

                            <div class="lower-content">
                                <div class="">
                                    <h2 class=""><b>{{ $vaccancy->title }}</b></h2>
                                    <div
                                        style="background-color: #f2f2f2; padding: 10px; border-radius: 5px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; height: 10vh; margin-bottom: 10px">

                                        @foreach ($vaccancy->type as $type)
                                            <span style="margin-right: 10px;">Job Type: </span> <span
                                                class="total"><b>{{ $type }}</b></span>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div class="separator"></div> --}}
                                <div
                                    style="background-color: #f2f2f2; padding: 10px; border-radius: 5px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; height: 10vh;">
                                    {{-- <h6 style="margin-right: 10px;">Schedule:</h6> --}}
                                    @foreach ($vaccancy->schedule as $schedule)
                                        <div
                                            style="background-color: white; padding: 5px 10px; margin-right: 10px; margin-bottom: 10px; border-radius: 5px;">
                                            {{ $schedule }}
                                        </div>
                                    @endforeach
                                </div>
                                <h3><a href="single-cause.html">Help with Economic Opportunity</a></h3>
                                <div class="text">Retro tattooed tousled, disrupt portland synth slow-carb brooklyn
                                    fashion axe four loko narwhal craft beer salvia.</div>
                                <div class="links"><a href="donate.html" class="theme-btn btn-style-three">DONATE
                                        NOW</a> <a href="single-cause.html" class="theme-btn btn-style-four">READ
                                        MORE</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>
@endsection
