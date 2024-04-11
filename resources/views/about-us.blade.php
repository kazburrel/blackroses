@extends('layout.index')

@section('content')
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">

        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>

        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">

            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-2.png" alt=""></a>
            </div><!-- /.logo -->

            <!-- .Side-menu -->
            <div class="side-menu">
                <!-- .navigation -->
                <ul class="navigation">
                    <li class="dropdown"><a href="#">Home</a>
                        <ul>
                            <li><a href="index.html">Homepage One</a></li>
                            <li><a href="index-2.html">Homepage Two</a></li>
                        </ul>
                    </li>
                    <li class="current dropdown"><a href="#">About Us</a>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Causes</a>
                        <ul>
                            <li><a href="causes.html">Our Causes</a></li>
                            <li><a href="single-cause.html">Single Cause</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Events</a>
                        <ul>
                            <li><a href="events.html">Our Events</a></li>
                            <li><a href="single-event.html">Event Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul>
                            <li><a href="donate.html">Donate Now</a></li>
                            <li><a href="volunteer.html">Volunteer</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="error-page.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul>
                            <li><a href="shop.html">Our Shop</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Our Blog</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->

            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
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
                <h2>WHO WE ARE</h2>
                <div class="separator"></div>
                <div class="desc-text">Bushwick viral skateboard cold-pressed godard. Cliche narwhal austin, godard
                    stumptown butcher pour-over umami offal art party kitsch flexitarian artisan chia. Sartorial narwhal
                    ethical listicle meggings cardigan four dollar toast. </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text">Four dollar toast banjo waistcoat ennui, squid braid tattooed trust
                                    fund semiotics chia taxidermy retro.</p>
                                <p>Eat and than sleep on your face when in doubt, wash stick butt in face. Meow for food,
                                    then when human fills food dish, take a few bites of food and continue meowing pee in
                                    the shoe but rub face on owner. Pee in the shoe always hungry get video posted to
                                    internet for chasing red dot. Climb a tree, wait for a fireman jump to fireman then
                                    scratch his face lick the other cats.</p>
                                <p>Missing until dinner time jump around on couch, meow constantly until given food, leave
                                    hair everywhere, and who's the baby. Always hungry sit on human eat from dog's food
                                    knock over christmas tree yet lick plastic bags, and thug cat . Claw drapes my left
                                    donut is missing, as is my right but intently stare at the same spot spread kitty
                                    litter all over house hiss at vacuum cleaner, eat prawns daintily clean wash down
                                    prawns to the warmest spot on the couch to claw at the fabric before taking a catnap.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/featured-image-6.jpg" alt=""></figure>
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
                        <div class="text">Bushwick viral skateboard cold-pressed godard. Cliche narwhal austin, godard
                            stumptown butcher pour-over umami offal art party kitsch. </div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-binoculars"></span></div>
                        <h3>Our Vision</h3>
                        <div class="separator"></div>
                        <div class="text">Bushwick viral skateboard cold-pressed godard. Cliche narwhal austin, godard
                            stumptown butcher pour-over umami offal art party kitsch. </div>
                    </div>
                </div>

                <!--Default Icon Column-->
                <div class="default-icon-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-envelope"></span></div>
                        <h3>Our Message</h3>
                        <div class="separator"></div>
                        <div class="text">Bushwick viral skateboard cold-pressed godard. Cliche narwhal austin, godard
                            stumptown butcher pour-over umami offal art party kitsch. </div>
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
