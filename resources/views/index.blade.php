@extends('layout.index')

@section('content')
    <!--Main Slider-->
    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="images/main-slider/image-1.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                        <img src="images/main-slider/image-1.jpg" alt="" data-bgposition="center top"
                            data-bgfit="cover" data-bgrepeat="no-repeat">

                        {{-- <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2>THEY ARE <span class="theme_color">HUMANS</span> <br>AS WELL</h2>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="40" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text">Make a better world for humans as Authism</div>
                        </div>

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="100" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#"
                                class="theme-btn btn-style-one">DONATE NOW</a></div>

                        <div class="tp-caption sfb sfb tp-resizeme" data-x="right" data-hoffset="-15" data-y="center"
                            data-voffset="0" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                        </div> --}}


                    </li>



                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="images/main-slider/image-2.jpg" data-saveperformance="off"
                        data-title="Awesome Title Here">
                        <img src="images/main-slider/image-2.jpg" alt="" data-bgposition="center top"
                            data-bgfit="cover" data-bgrepeat="no-repeat">
                        {{-- 
                        <div class="tp-caption sft sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="-50" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2 class="text-center">THEY ARE <span class="theme_color">HUMANS</span> <br>AS WELL</h2>
                        </div>

                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="40" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text text-center">Make a better world for humans as Authism</div>
                        </div>

                        <div class="tp-caption sfb sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="110" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn"><a href="#"
                                class="theme-btn btn-style-one">DONATE NOW</a></div> --}}


                    </li>

                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Recent Causes Section-->
    <section class="recent-causes-section no-bg">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2> ABOUT THE SERVICE</h2>
                <div class="separator"></div>
                <div class="desc-text">Black Roses Support prides itself in offering a 24-hour therapeutic support service
                    to young people aged 16-25. The aim of the service is to provide a safe and homely
                    environment, where young people who are at risk of exclusion and isolation can build
                    the skills , confidence and resilience to enable them to reach their full potential and
                    have a smooth transition to independence. We are able to support young people from
                    all walks of life, However as a lived experience practitioner we are fully equipped to
                    support young people involved in serious youth violence and other harmful practice.</div>
            </div>

            <div class="row clearfix">
                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <figure class="image"><a href="single-cause.html"><img
                                        src="images/resource/featured-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="single-cause.html">Governance and Quality Assurance</a></h3>
                            <div class="text">At Black Roses Support, we make sure everything runs smoothly and safely.
                                Each month, our manager and team check everything from client files to safety rules to how
                                well our staff are trained. We listen to young people's ideas and feelings in monthly
                                meetings and even have a suggestion box for them and our staff. Our team meets monthly too,
                                to talk about how we can do better. We also check in with our staff every year and listen to
                                what young people think about our service. Our staff get regular training on important
                                things like keeping everyone safe and helping people with their problems. We work hard to
                                make sure everyone feels safe, supported, and heard at Black Roses Support.</div>
                            <div class="links">
                                <a href="single-cause.html" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <figure class="image"><a href="single-cause.html"><img
                                        src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="single-cause.html">Service Facilities</a></h3>
                            <div class="text">At Black Roses Support, we believe in creating a cozy environment where
                                young people can feel at home. Each unit is equipped with a lounge area where residents can
                                relax and watch TV, with access to various channels including Freeview and sometimes
                                Netflix. WiFi access is available for educational purposes, allowing residents to use their
                                own devices for homework and other learning needs. Our staff use designated office spaces to
                                maintain confidentiality, while the kitchen is fully equipped for meal preparation and
                                communal dining. Additionally, we promote a smoke-free environment in line with current
                                legislation, encouraging residents who smoke to do so away from the premises.</div>
                            <div class="links">
                                <a href="single-cause.html" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <figure class="image"><a href="single-cause.html"><img
                                        src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="single-cause.html">
                                    Social Engagement:</a></h3>
                            <div class="text">At Black Roses Support, we foster a sense of community through engaging
                                group activities, workshops, and recreational events. Residents participate in various
                                activities, building bonds and camaraderie with one another. Our goal is to create an
                                inclusive environment where everyone feels valued and connected. Click below to learn more
                                about our vibrant social initiatives! </div>
                            <div class="links">
                                <a href="single-cause.html" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Call To Action-->
    <section class="call-to-action" style="background-image:url(images/background/image-1.jpg);">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>Our Dedication:</h2>
                <div class="separator"></div>
                <div class="desc-text" style="font-size: 20px">Collaborating closely with all stakeholders and bridging
                    gaps
                    to uphold an
                    environment where young individuals can feel secure, cherished, and flourish.</div>
            </div>
        </div>
    </section>


    <!--How To Contribute Section-->
    <section class="how-to-contribute style-two">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>CORE VALUES</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>CHOICE</b> </h3>
                            <div class="text">At Black Roses Support, we empower our clients with the freedom to make
                                their own decisions across all aspects of their daily lives. This includes allowing them to
                                manage their own time without strict communal schedules, respecting their individuality,
                                maintaining flexibility in daily routines, and encouraging them to personalize their living
                                spaces with personal belongings.</div>
                        </div>
                    </div>
                </div>
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>CIVIL RIGHTS</b> </h3>
                            <div class="text">Black Roses Support ensures clients exercise their civil rights by
                                facilitating voting, accessing NHS services, claiming welfare benefits, and accessing public
                                services like libraries and education. Clients are also supported in voluntary work and
                                finding employment, all in compliance with The Human Rights Act 1998.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>CONFIDENTIALITY</b> </h3>
                            <div class="text">Black Roses Support ensures that information we hold about clients are kept
                                confidential at all times in accordance with the GDPR/Data Protection Act 2018.
                                There are exceptions to this rule in extreme cases where personal data relating
                                to a client’s mental and /or physical health could be passed on without explicit
                                consent if this is deemed necessary to protect the vital interests of the client
                                and/or the safety of others.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>DIGNITY AND RESPECT</b> </h3>
                            <div class="text">At Black Roses Support we uphold dignity and respect for our clients
                                by valuing them as individuals, supporting their personal presentation and social
                                interactions, providing opportunities for self-expression, and addressing any discrimination
                                they may encounter.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>EQUAL OPPORTUNITIES</b> </h3>
                            <div class="text">Black Roses Support upholds equal opportunities principles, refraining from
                                discrimination based on race, religion, gender, disability, sexual orientation, marital
                                status, or age for both staff and clients. Our Equality and Diversity Policy is accessible
                                through the unit manager upon request.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>INDEPENDENCE</b> </h3>
                            <div class="text">Black Roses Support promotes independence among clients by empowering them
                                to lead independent lives, make decisions, and take informed risks. We encourage maintaining
                                contact with friends and family and offer opportunities for clients to contribute to their
                                support package. Regular house meetings ensure client involvement in property management.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>PRIVACY</b> </h3>
                            <div class="text">Black Roses Support values the privacy of clients in communal living
                                spaces, ensuring respect for personal boundaries and offering opportunities for privacy.
                                Clients are supported in personalizing their living spaces and have access to communal areas
                                for solitude or socializing. Bedroom doors are equipped with locks for individual privacy,
                                and staff strictly adhere to policies on entering client rooms.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>SAFETY AND SECURITY</b> </h3>
                            <div class="text">Black Roses Support prioritizes security and safety by providing guidance
                                on tasks with potential risks, safeguarding clients from abuse, and fostering an open and
                                inclusive atmosphere. Staff and clients are familiar with procedures for raising concerns,
                                and visitor access is controlled to protect client privacy and safety.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Fun Facts Section-->
    {{-- <section class="fun-facts-section" style="background-image:url(images/background/image-3.jpg);">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>SO FAR WE’VE ACHIEVED</h2>
                <div class="separator"></div>
            </div>

            <!--Fact Counter-->
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="count-outer"><span class="icon flaticon-interface-8"></span><span class="count-text"
                                    data-speed="3000" data-stop="1240">0</span></div>
                            <h4 class="counter-title">Workout Sesisons</h4>
                            <div class="separator"></div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="count-outer"><span class="icon flaticon-money-bag"></span><span
                                    class="count-text" data-speed="2000" data-stop="242">0</span>k</div>
                            <h4 class="counter-title">DOLLAR RAISED</h4>
                            <div class="separator"></div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="count-outer"><span class="icon flaticon-volunteer"></span><span
                                    class="count-text" data-speed="2500" data-stop="482">0</span></div>
                            <h4 class="counter-title">VOLUNTEERS</h4>
                            <div class="separator"></div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="count-outer"><span class="icon flaticon-happiness-1"></span><span
                                    class="count-text" data-speed="5000" data-stop="6152">0</span></div>
                            <h4 class="counter-title">HAPPY CHILDRENS</h4>
                            <div class="separator"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}


    <!--News Section-->
    {{-- <section class="news-section">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>OUR BLOG</h2>
                <div class="separator"></div>
                <div class="desc-text">Literally poutine street art next level. Williamsburg shoreditch fingerstache vice
                    migas. Direct trade occupy bushwick mlkshk mixtape swag.</div>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <!--News Style One-->
                    <div class="news-style-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/resource/blog-image-1.jpg" alt=""><a
                                    href="blog-single.html" class="overlay-link">
                                    <div class="icon"><span class="flaticon-cross"></span></div>
                                </a></figure>
                            <div class="post-meta clearfix">
                                <div class="pull-left"><a href="#"><span class="fa fa-calendar-o"></span> 03 June
                                        2016</a></div>
                                <div class="pull-right"><a href="#"><span class="fa fa-heart-o"></span> 3</a>
                                    &ensp;&ensp; <a href="#"><span class="fa fa-comment-o"></span> 7</a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-single.html">FOODS FOR CHILDREN</a></h3>
                                <div class="text">At the end of the day, going forward, a new normal that has evolved
                                    from generation X is on the runway heading towards a streamlined cloud solution.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <!--News Style Two-->
                    <div class="news-style-two">
                        <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <figure class="image-box"><img src="images/resource/blog-image-2.jpg" alt=""><a
                                    href="blog-single.html" class="overlay-link">
                                    <div class="icon"><span class="flaticon-cross"></span></div>
                                </a></figure>
                            <div class="lower-content">
                                <div class="post-meta"><a href="#"><span class="fa fa-calendar-o"></span> 05 June
                                        2016</a></div>
                                <h3><a href="blog-single.html">EDUCATION FOR CHILDREN</a></h3>
                                <div class="text">At the end of the day, going forward, a normal evolved is on the runway
                                    streamlined cloud solution.</div>
                            </div>
                        </div>
                    </div>

                    <!--News Style Two-->
                    <div class="news-style-two">
                        <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <figure class="image-box"><img src="images/resource/blog-image-3.jpg" alt=""><a
                                    href="blog-single.html" class="overlay-link">
                                    <div class="icon"><span class="flaticon-cross"></span></div>
                                </a></figure>
                            <div class="lower-content">
                                <div class="post-meta"><a href="#"><span class="fa fa-calendar-o"></span> 07 June
                                        2016</a></div>
                                <h3><a href="blog-single.html">HOMELESS PEOPLE</a></h3>
                                <div class="text">At the end of the day, going forward, a normal evolved is on the runway
                                    streamlined cloud solution.</div>
                            </div>
                        </div>
                    </div>

                    <!--News Style Two-->
                    <div class="news-style-two">
                        <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="400ms">
                            <figure class="image-box"><img src="images/resource/blog-image-4.jpg" alt=""><a
                                    href="blog-single.html" class="overlay-link">
                                    <div class="icon"><span class="flaticon-cross"></span></div>
                                </a></figure>
                            <div class="lower-content">
                                <div class="post-meta"><a href="#"><span class="fa fa-calendar-o"></span> 09 June
                                        2016</a></div>
                                <h3><a href="blog-single.html">POVERTY PEOPLE</a></h3>
                                <div class="text">At the end of the day, going forward, a normal evolved is on the runway
                                    streamlined cloud solution.</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section> --}}


    <!--Latest Events-->
    {{-- <section class="latest-events style-two">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>LATEST EVENTS</h2>
                <div class="separator"></div>
                <div class="desc-text">There is no exercise better for the heart than reaching down and lifting people up.
                </div>
            </div>

            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/featured-image-5.jpg" alt=""></figure>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <div class="where-we-active">
                        <h3 class="medium-title">SEE WHERE WE ACTIVE</h3>
                        <div class="desc-text">Leverage agile frameworks to provide a robust synopsis for high level
                            overviews. Iterative approaches to corporate strategy foster collaborative thinking to further
                            the overall value proposition. Organically grow the holistic workplace diversity and
                            empowerment.</div>
                    </div>

                    <div class="upcoming-events">
                        <h3 class="medium-title">UPCOMING EVENTS</h3>
                        <div class="single-item-carousel">

                            <!--Event Box-->
                            <div class="event-box">
                                <div class="inner">
                                    <figure class="image-box"><a href="single-event.html"><img
                                                src="images/resource/featured-thumb-1.jpg" alt=""></a></figure>
                                    <div class="slide-content">
                                        <h4><a href="single-event.html">Bring to the survival strategies</a></h4>
                                        <div class="text">Leverage agile frameworks to robust synopsis for high level
                                            overviews. </div>
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="icon fa fa-map-marker"></span> Nepal</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-calendar-o"></span> Aug
                                                    08,2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Event Box-->
                            <div class="event-box">
                                <div class="inner">
                                    <figure class="image-box"><a href="single-event.html"><img
                                                src="images/resource/featured-thumb-1.jpg" alt=""></a></figure>
                                    <div class="slide-content">
                                        <h4><a href="single-event.html">Bring to the survival strategies</a></h4>
                                        <div class="text">Leverage agile frameworks to robust synopsis for high level
                                            overviews. </div>
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="icon fa fa-map-marker"></span> Nepal</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-calendar-o"></span> Aug
                                                    08,2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Event Box-->
                            <div class="event-box">
                                <div class="inner">
                                    <figure class="image-box"><a href="single-event.html"><img
                                                src="images/resource/featured-thumb-1.jpg" alt=""></a></figure>
                                    <div class="slide-content">
                                        <h4><a href="single-event.html">Bring to the survival strategies</a></h4>
                                        <div class="text">Leverage agile frameworks to robust synopsis for high level
                                            overviews. </div>
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="icon fa fa-map-marker"></span> Nepal</a>
                                            </li>
                                            <li><a href="#"><span class="icon fa fa-calendar-o"></span> Aug
                                                    08,2016</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}


    <!--Shop Section-->
    {{-- <section class="shop-section">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title centered">
                <h2>OUR PRODUCTS</h2>
                <div class="separator"></div>
                <div class="desc-text">Learning curve graphical user interface buyer non-disclosure agreement MVP. Traction
                    responsive web design business plan customer buyer android equity.</div>
            </div>

            <div class="row clearfix">
                <!--Default Shop Item-->
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <figure class="image"><a href="shop-single.html"><img
                                        src="images/resource/products/image-1.jpg" alt=""></a></figure>
                            <div class="prod-options">
                                <a class="lightbox-image option-btn" href="images/resource/products/image-1.jpg"
                                    title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                        class="fa fa-search"></span></a>
                                <a class="option-btn" href="shop-single.html"><span
                                        class="fa fa-shopping-cart"></span></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="shop-single.html">PRODUCT TITLE</a></h3>
                            <div class="price"><span class="price-txt">$ 24.00</span></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star-o"></span></div>
                        </div>
                    </div>
                </div>

                <!--Default Shop Item-->
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <figure class="image"><a href="shop-single.html"><img
                                        src="images/resource/products/image-2.jpg" alt=""></a></figure>
                            <div class="prod-options">
                                <a class="lightbox-image option-btn" href="images/resource/products/image-2.jpg"
                                    title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                        class="fa fa-search"></span></a>
                                <a class="option-btn" href="shop-single.html"><span
                                        class="fa fa-shopping-cart"></span></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="shop-single.html">PRODUCT TITLE</a></h3>
                            <div class="price"><span class="price-txt">$ 36.00</span></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star-o"></span></div>
                        </div>
                    </div>
                </div>

                <!--Default Shop Item-->
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <figure class="image"><a href="shop-single.html"><img
                                        src="images/resource/products/image-3.jpg" alt=""></a></figure>
                            <div class="prod-options">
                                <a class="lightbox-image option-btn" href="images/resource/products/image-3.jpg"
                                    title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                        class="fa fa-search"></span></a>
                                <a class="option-btn" href="shop-single.html"><span
                                        class="fa fa-shopping-cart"></span></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="shop-single.html">PRODUCT TITLE</a></h3>
                            <div class="price"><span class="price-txt">$ 245.00</span></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star-o"></span></div>
                        </div>
                    </div>
                </div>

                <!--Default Shop Item-->
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="900ms">
                        <div class="image-box">
                            <figure class="image"><a href="shop-single.html"><img
                                        src="images/resource/products/image-4.jpg" alt=""></a></figure>
                            <div class="prod-options">
                                <a class="lightbox-image option-btn" href="images/resource/products/image-4.jpg"
                                    title="Image Caption Here" data-fancybox-group="example-gallery"><span
                                        class="fa fa-search"></span></a>
                                <a class="option-btn" href="shop-single.html"><span
                                        class="fa fa-shopping-cart"></span></a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="shop-single.html">PRODUCT TITLE</a></h3>
                            <div class="price"><span class="price-txt">$ 54.00</span></div>
                            <div class="rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star-o"></span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
@endsection
