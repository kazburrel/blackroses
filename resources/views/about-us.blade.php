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
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);" <div class="auto-container">
        <h1>About Us</h1>
        <div class="bread-crumb-outer">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
        </div>
    </section>


    <!--About Us-->
    <section class="about-us-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                {{-- <h2>ABOUT US</h2> --}}
                <div class="separator"></div>
                <div class="desc-text">
                    Black Roses is dedicated to offering a secure and nurturing living environment for young adults
                    transitioning from care, aged 16-25. We provide homes where our young residents feel safe, appreciated,
                    and empowered. Our mission is to assist each individual in achieving their unique goals, realizing their
                    potential, and setting them on a path towards a prosperous, happy, and healthy future.
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text" style="text-align: center;">Goals and Objectives.</p>

                                <div class="numbered-list">
                                    <p>
                                        Providing exceptional care to our young residents and establishing our reputation as
                                        a compassionate and effective service in our local community.
                                    </p>
                                    <p>
                                        Ensuring our young residents feel safe, respected, and supported, so they view Black
                                        Roses as their home, not just a place where they reside.
                                    </p>
                                    <p>
                                        Recruiting high-caliber, caring staff using the safer recruitment framework,
                                        ensuring our young residents receive the best care to help them grow and overcome
                                        challenges.
                                    </p>
                                    <p>
                                        Offering customized support and establishing partnerships with local providers to
                                        equip our young residents with the skills needed to become healthy, happy,
                                        productive members of society when they leave us.
                                    </p>
                                    <p>
                                        Integrating our young residents into their local community through volunteering
                                        opportunities and shared skill sessions to foster mutual understanding and respect.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/aims.jpg" alt=""></figure>
                    </div>

                </div>
            </div>

            <div class="row clearfix">

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-target"></span></div>
                        <h3>Our Mission</h3>
                        <div class="separator"></div>
                        <div class="text">We aim to meet the needs of every young person by carefully planning and
                            implementing holistic approaches in line with the Children Act 1989 and subsequent regulations.
                            Our mission is to ensure that each individual receives tailored support, addressing their
                            physical, emotional, and social needs comprehensively.</div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-binoculars"></span></div>
                        <h3>Our Vision</h3>
                        <div class="separator"></div>
                        <div class="text">Our vision is to work collaboratively with young people, empowering them to
                            actively participate in decisions about their support plans. We strive to promote independence,
                            dignity, and respect for all individuals, fostering a nurturing environment where every voice is
                            heard and valued. </div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-envelope"></span></div>
                        <h3>Our Message</h3>
                        <div class="separator"></div>
                        <div class="text">At our core, we believe in the inherent worth and potential of every young
                            person. Our message is one of inclusivity, compassion, and commitment to providing high-quality
                            support through trained and compassionate staff. We are dedicated to helping young people
                            overcome challenges and build brighter futures, utilizing tailored strategies and community
                            resources to support their journey towards independence and well-being. </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
