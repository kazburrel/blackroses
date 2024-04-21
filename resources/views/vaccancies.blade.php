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
                <div class="desc-text">
                    Black Roses Support is committed to providing outstanding care to clients through a team of highly
                    skilled and compassionate professionals. We prioritize continuous training, development, and improvement
                    to ensure the delivery of top-quality service. Our organization offers opportunities for both
                    experienced and entry-level staff, with competitive compensation based on experience and qualifications.

                    All Support Workers undergo comprehensive training and are expected to work towards achieving the Care
                    Certificate Standards and QCF Level 2 Health and Social Care as a minimum requirement. Depending on the
                    job role and Personal Development Plan, access to QCF Level 3 Health and Social Care and above, as well
                    as other relevant training opportunities, may be available.

                    If you are passionate about making a positive impact on the lives of vulnerable individuals and helping
                    them increase their independence, we invite you to join our team. At Black Roses Support, we believe in
                    empowering individuals to make a difference in
                    the lives of others. Our mission is to provide unparalleled support and care to those in need, fostering
                    a community of compassion, understanding, and growth. To apply, please check for available
                    listings and follow the application instructions provided.
                    Please note that a DBS check and
                    references will be required.
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
            @if ($vaccancies)
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
                                    <p style="margin: 0;">
                                        <span style="color: #black; font-size: 80%;"><b>{{ $vaccancy->location }},
                                                {{ $vaccancy->postcode }}</b></span>
                                    </p>
                                    <div
                                        style="background-color: #f2f2f2; padding: 10px; border-radius: 5px; margin-top: 10px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; height: 10vh;">
                                        @foreach ($vaccancy->schedule as $schedule)
                                            <div
                                                style="background-color: white; padding: 5px 10px; margin-right: 10px; margin-bottom: 10px; border-radius: 5px;">
                                                {{ $schedule }}
                                            </div>
                                        @endforeach
                                    </div>


                                    <div style="margin-top: 10px">
                                        <span style="display: block; font-size: 0.9em; font-style: italic;">Please visit the
                                            application page to view the complete job description, requirements &
                                            responsibilties</span>
                                    </div>


                                    <div class="text" style="margin-top:10px">
                                        <p>Closing Date: {{ $vaccancy->due_date }}</p>
                                    </div>
                                    <div class="links" style="display: flex; flex-direction: column; margin-top: 10px">
                                        <div>
                                            <p style="margin: 0;">
                                                <i>{{ $vaccancy->pay_rate ?? 'Null' }}/hr</i>

                                            </p>

                                        </div>
                                        <a href="{{ route('job.apply', ['job' => $vaccancy->uuid]) }}"
                                            class="theme-btn btn-style-four" style="margin-top: 10px;">
                                            APPLY NOW
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h1>There are no vacancies at this time</h1>
                    @endforelse
                </div>
            @else
            @endif

        </div>
    </section>
@endsection
