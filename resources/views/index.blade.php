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
                            <figure class="image"><a href="single-cause.html"><img src="images/resource/referals.jpg"
                                        alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                            <div class="separator"></div>
                            <h3><a href="single-cause.html">The Referral Process</a></h3>
                            <div class="text">
                                The referral process begins with an enquiry, by telephone, email or letter.
                                The service will then ask for a referral form to be sent, giving brief information about
                                the potential client and their risks as well as support needs. This form can be completed
                                by a social worker and/or other professionals.
                                A review of this information is then undertaken to assess whether the service can
                                potentially meet the needs of the individual being referred. If the service determines
                                that they can meet the needs of the referred person, an Impact Risk Assessment
                                (ImRA) is completed by a Unit Manager from identified placement to highlight if there
                                are any impact risks for the referred young person as well as existing young people in
                                our service.</div>
                            <div class="links">
                                <a href="single-cause.html" class="theme-btn btn-style-four">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

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
                <div class="default-cause-box col-md-4 col-sm-6 col-xs-12" style="margin-top: 15px">
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
@endsection
