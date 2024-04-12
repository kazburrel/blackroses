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
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
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
                <h2>ABOUT THE SERVICE</h2>
                <div class="separator"></div>
                <div class="desc-text">
                    Black Roses Support prides itself in offering a 24-hour therapeutic support service to
                    young people aged 16-25. The aim of the service is to provide a safe and homely
                    environment, where young people who are at risk of exclusion and isolation can build
                    the skills , confidence and resilience to enable them to reach their full potential and
                    have a smooth transition to independence. We are able to support young people from
                    all walks of life, However as a lived experience practitioner we are fully equipped to
                    support young people involved in serious youth violence and other harmful practice.
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text" style="text-align: center;">Aims and Objectives.</p>

                                <div class="numbered-list">
                                    <p>
                                        To provide support that is tailored to each young person’s individual needs.
                                    </p>
                                    <p>
                                        To provide accommodation to young people for emergency,
                                        short and long term stays
                                    </p>
                                    <p>
                                        To empower clients to lead as independent a life as possible.
                                    </p>
                                    <p>
                                        To provide services that is anti-discriminatory.
                                    </p>
                                    <p>
                                        To provide a service that takes into account young people’s preferences,
                                        wishes, personal circumstances and individual abilities.
                                    </p>
                                    <p>
                                        To provide young people with support of the highest quality within their
                                        own home environment.
                                    </p>
                                    <p>
                                        To provide a safe and protected environment prioritising Young Peoples
                                        safety at all times.
                                    </p>
                                    <p>
                                        To provide a service that empowers Young People to have personal
                                        dignity.
                                    </p>
                                    <p>
                                        To provide a home environment free from exploitation.
                                    </p>
                                    <p>
                                        To provide a service that enables Young People to live a normal life within
                                        the community.
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


    <!--What We Think-->
    <section class="what-we-think">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Column-->
                <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <h3>WHAT WE THINK ABOUT OUR CHARITY</h3>
                        <div class="text">Leverage agile frameworks to provide a robust synopsis for high level
                            overviews. Iterative approaches to corporate strategy foster collaborative thinking to further
                            the overall value proposition. Organically grow the holistic via workplace diversity and
                            empowerment.</div>
                        <div class="clearfix">
                            <!--Box-->
                            <div class="feature-box">
                                <div class="count">8</div>YEARS IN CHARITY
                            </div>
                            <!--Box-->
                            <div class="feature-box">
                                <div class="count">625</div>PROJECT HANDLED
                            </div>
                            <!--Box-->
                            <div class="feature-box">
                                <div class="count">54</div>STAFF MEMBERS
                            </div>
                        </div>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <figure class="image-box"><img src="images/resource/featured-image-7.jpg" alt=""></figure>
                </div>

            </div>
        </div>
    </section>


    <!--Sponsors Section-->
    <section class="sponsors-section-two">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>OUR SPONSORS</h2>
                <div class="separator"></div>
            </div>

            <div class="sponsors-outer">
                <!--Sponsors Carousel Two-->
                <ul class="sponsors-carousel-two">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/7.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/8.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/9.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/10.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/11.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/7.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/8.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/9.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/10.jpg"
                                    alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/11.jpg"
                                    alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/7.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/8.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/9.jpg" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/10.jpg"
                                    alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/sponsors/11.jpg"
                                    alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
@endsection
