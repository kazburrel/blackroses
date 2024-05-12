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
                        <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2
                                style="background-color: rgba(255, 255, 255, 0.5); color: black; padding-right: 8px; padding-left: 8px">
                                WELCOME TO {{ config('app.name') }}
                            </h2>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="40" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text"
                                style="background-color: rgba(255, 255, 255, 0.5); color: black; padding-right: 8px; padding-left: 8px">
                                Where smiles light up our community and connections matter most.</div>
                        </div>
                    </li>



                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                        data-thumb="images/main-slider/image-2.jpg" data-saveperformance="off"
                        data-title="Awesome Title Here">
                        <img src="images/main-slider/image-2.jpg" alt="" data-bgposition="center top"
                            data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption sfl sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="-50" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <h2
                                style="background-color: rgba(255, 255, 255, 0.5); color: black; padding-right: 8px; padding-left: 8px">
                                Empowering Connections
                            </h2>
                        </div>

                        <div class="tp-caption sfr sfb tp-resizeme" data-x="left" data-hoffset="15" data-y="center"
                            data-voffset="40" data-speed="1500" data-start="500" data-easing="easeOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                            data-endspeed="1200" data-endeasing="Power4.easeIn">
                            <div class="text"
                                style="background-color: rgba(255, 255, 255, 0.5); color: black; padding-right: 8px; padding-left: 8px">
                                Where our dedicated staff members empower young individuals through meaningful interactions
                                and compassionate support.
                            </div>
                        </div>

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
                <div class="desc-text">Black Roses is dedicated to offering a secure and nurturing living environment for
                    young adults transitioning from care, aged 16-25. We provide homes where our young residents feel safe,
                    appreciated, and empowered. Our mission is to assist each individual in achieving their unique goals,
                    realizing their potential, and setting them on a path towards a prosperous, happy, and healthy future.
                </div>
            </div>

            <div class="row clearfix">
                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('referrals') }}"><img
                                        src="images/resource/referals.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="{{ route('referrals') }}">The services we provide</a></h3>
                            <div class="text">
                                Our organization is dedicated to providing comprehensive and transparent support for young
                                people between the ages of 16 and 18. We place a strong emphasis on maintaining clear and
                                open communication with local authorities to ensure a mutual understanding of the support
                                services we offer.
                                The young people in our care can expect a wide array of support, both from our on-site staff
                                and through partnerships with external agencies. Our approach is holistic, addressing
                                practical needs as well as emotional well-being. Our committed staff members work closely
                                with each individual, developing personalized care plans that encompass areas such as
                                education, employment, health, and personal goals.....


                            </div>
                            <div class="links">
                                <a href="{{ route('services') }}" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('about') }}"><img
                                        src="images/resource/featured-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="{{ route('about') }}">Who we support</a></h3>
                            <div class="text">
                                Our service is dedicated to supporting up to 4 looked-after children and
                                care leavers, aged 16 and 17, in a mixed-sex, ringfenced group living arrangement. We
                                welcome young people who exhibit a growing level of independence and a readiness to acquire
                                additional skills necessary for a successful transition into adulthood. Our service is
                                tailored specifically for young individuals who no longer require the level of care or the
                                specific environment provided in a children's home or foster care setting....
                            </div>
                            <div class="links">
                                <a href="{{ route('about') }}" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('services') }}"><img
                                        src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="{{ route('services') }}">Our Facilities and Accommodation</a></h3>
                            <div class="text">Our supported accommodation is housed in a spacious, secure, and
                                well-maintained 6, 5, 4, and 3-bedroom, setting. Each young person is provided with a
                                private double room and desk space, ensuring a comfortable and personal living environment.
                                Bathrooms are shared between residents, fostering a sense of responsibility and cooperation.
                                The setting also features communal lounge, kitchen, study, and gaming facilities, as well as
                                a beautiful garden and communal decking area for recreation and relaxation. The setting is
                                conveniently located within a 5-minute walk from essential amenities such as public
                                transport, education facilities, community facilities, healthcare, and other relevant local
                                services.

                            </div>
                            <div class="links">
                                <a href="{{ route('services') }}" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Cause Box-->
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12" style="margin-top: 15px">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="image-box">
                            <figure class="image"><a href="{{ route('services') }}"><img
                                        src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="{{ route('services') }}">
                                    Social Engagement:</a></h3>
                            <div class="text">At Black Roses Support, we foster a sense of community through engaging
                                group activities, workshops, and recreational events. Residents participate in various
                                activities, building bonds and camaraderie with one another. Our goal is to create an
                                inclusive environment where everyone feels valued and connected. Click below to learn more
                                about our vibrant social initiatives! </div>
                            <div class="links">
                                <a href="{{ route('services') }}" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Call To Action-->
    <section class="call-to-action" style="background-image:url(images/main-slider/image-2.jpg);">
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
                            <div class="text">At Black Roses Support, we empower our young people with the freedom to
                                make
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
                            <div class="text">Black Roses Support ensures young people exercise their civil rights by
                                facilitating voting, accessing NHS services, claiming welfare benefits, and accessing public
                                services like libraries and education. young people are also supported in voluntary work and
                                finding employment, all in compliance with The Human Rights Act 1998.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>PROMOTING INDEPENDENCE</b> </h3>
                            <div class="text">Black Roses Support promotes independence among young people by empowering
                                them
                                to lead independent lives, make decisions, and take informed risks. We encourage maintaining
                                contact with friends and family and offer opportunities for young people to contribute to
                                their
                                support package. Regular house meetings ensure young people involvement in property
                                management.
                            </div>

                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>DIGNITY AND RESPECT</b> </h3>
                            <div class="text">At Black Roses Support we uphold dignity and respect for our young people
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
                                status, or age for both staff and young people. Our Equality and Diversity Policy is
                                accessible
                                through the unit manager upon request.</div>
                        </div>
                    </div>
                </div>

                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>CONFIDENTIALITY</b> </h3>
                            <div class="text">Black Roses Support ensures that information we hold about young people are
                                kept
                                confidential at all times in accordance with the GDPR/Data Protection Act 2018.
                                There are exceptions to this rule in extreme cases where personal data relating
                                to a young people's mental and /or physical health could be passed on without explicit
                                consent if this is deemed necessary to protect the vital interests of the young people
                                and/or the safety of others.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>PRIVACY</b> </h3>
                            <div class="text">Black Roses Support values the privacy of young people in communal living
                                spaces, ensuring respect for personal boundaries and offering opportunities for privacy.
                                young people are supported in personalizing their living spaces and have access to communal
                                areas
                                for solitude or socializing. Bedroom doors are equipped with locks for individual privacy,
                                and staff strictly adhere to policies on entering young people rooms.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contribute-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <h3> <b>SAFETY AND SECURITY</b> </h3>
                            <div class="text">Black Roses Support prioritizes security and safety by providing guidance
                                on tasks with potential risks, safeguarding young people from abuse, and fostering an open
                                and
                                inclusive atmosphere. Staff and young people are familiar with procedures for raising
                                concerns,
                                and visitor access is controlled to protect young people privacy and safety.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
