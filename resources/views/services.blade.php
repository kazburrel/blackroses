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

        /* Define a counter for the div with a specific class */
        .roman-numerals {
            counter-reset: section;
        }

        /* Style the p tags with a specific class */
        .roman-numerals p {
            counter-increment: section;
            /* Increment the counter for each p tag */
        }

        /* Set the content of the p tags with a specific class to the counter value in Roman numerals */
        .roman-numerals p::before {
            content: counter(section, upper-roman) ". ";
            /* Use upper-roman to display Roman numerals in uppercase */
        }
    </style>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
        <div class="auto-container">
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ asset('home') }}">Home</a></li>
                    <li class="active">Our Service</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <section class="about-us-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h1>Our Services</h1>

                <div class="separator"></div>
                <div class="desc-text">
                    <b>Black Roses Support strives to ensure all units provide facilities to promote a
                        homely environment for the Young People, setting a platform for social
                        engagement and productive stimulation.</b>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <p class="strong-text" style="text-align: center;">Service Facilities.</p>

                                <div class="numbered-list">
                                    <p>
                                        Black roses support units have a lounge where the young people have the
                                        use of a television and there is a varied selection of channels through
                                        Freeview. In Some placement there is Netflix available as well.
                                    </p>
                                    <p>
                                        The units have computers that have access to the Internet and the young
                                        people are encouraged to make use of this to assist with homework and their
                                        wider educational needs. Access to the Internet can be supervised and its
                                        use is monitored with internet security as part of a system of checks to
                                        ensure it is used appropriately.
                                    </p>
                                    <p>
                                        The Unit Manager and other staff members use the office. Due to issues of
                                        ensuring confidentiality young people do not have access to the office unless
                                        a member of staff is present.
                                    </p>
                                    <p>
                                        The kitchen has all the mod cons including cookers and fridge freezers in
                                        each Kitchen. There are table and chairs so the young people and staff may
                                        share mealtimes and engage in conversations.
                                    </p>
                                    <p>
                                        The Unit has plenty of storage facilities, which are used for household
                                        linen, toiletries and sports equipment, etc
                                    </p>
                                    <p>
                                        Current legislation states that smoking is prohibited in public places.
                                        Smoking is very much discouraged and the young people that do smoke are
                                        asked to smoke away from the premises.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/lounge.png" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>

        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h1>Range of Support</h1>

                <div class="separator"></div>
                <div class="desc-text">
                    <b>Black Roses Support aims to help clients develop their skills, on an individual
                        basis, that they may progress to greater independence, and further integrate
                        into the local community. The ways in which we support clients may include
                        providing advice, supervising and facilitating with:</b>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                {{-- <p class="strong-text" style="text-align: center;">Service Facilities.</p> --}}

                                <div class="numbered-list">
                                    <p>
                                        Correspondence related to benefits and their accommodation
                                    </p>
                                    <p>
                                        Budgeting, paying bills and saving
                                    </p>
                                    <p>
                                        Meal planning, shopping and cooking
                                    </p>
                                    <p>
                                        Domestic upkeep of their living space
                                    </p>
                                    <p>
                                        Maintaining the security and safety of the property
                                    </p>
                                    <p>
                                        Opportunities for employment and voluntary work
                                    </p>
                                    <p>
                                        Opportunities for education and leisure
                                    </p>
                                    <p>
                                        Registering with a GP and dentist of their choice, and maintaining links with
                                        appropriate healthcare services
                                    </p>
                                    <p>
                                        Responding to their changing support needs in liaison with other agencies
                                        involved in their support.
                                    </p>
                                    <p>
                                        Maintain/developing community links and relationships
                                    </p>
                                    <p>
                                        Where appropriate foster links with family members
                                    </p>
                                    <p>
                                        General support
                                    </p>
                                    <p>
                                        Transport to educational services where needed on initial visits
                                    </p>
                                    <p>
                                        Support with identifying best transport ways/links to visit families
                                    </p>
                                    <p>
                                        Accessing Laundry facilities
                                    </p>
                                    <p>
                                        Participating and accessing Recreation facilities
                                    </p>
                                    <p>
                                        Residents meetings
                                    </p>
                                    <p>
                                        Computer and Internet access to support learning
                                    </p>
                                    <p>
                                        Use of telephone – in private or with staff available for support
                                    </p>
                                </div>
                                <p style="margin-top: 20px"><b>Black Roses Support is not normally equipped to cope with
                                        areas
                                        such as
                                        severe mental health problems, severe challenging behaviour, nursing and
                                        medical care and personal hygiene care.</b>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/support.jpeg" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>

        <div class="auto-container">

            <h2 style="text-align: center;">
                <p>Governance and Quality Assurance</p>
            </h2>

            <!--Section Title-->
            <div class="sec-title centered">
                {{-- <h2>ABOUT US</h2> --}}
                <div class="separator"></div>
                <div class="desc-text">
                    <b>In order to deliver a high quality service, monthly audits are carried out by the
                        Manager and Operations team of the service. These audits include:</b>
                </div>
            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                {{-- <p class="strong-text" style="text-align: center;">Service Facilities.</p> --}}


                                <div class="numbered-list">
                                    <p>
                                        Client Files
                                    </p>
                                    <p>
                                        Health and Safety
                                    </p>
                                    <p>
                                        Client Meetings
                                    </p>
                                    <p>
                                        Team Meetings
                                    </p>
                                    <p>
                                        Staff supervision
                                    </p>
                                    <p>
                                        Staff training
                                    </p>
                                    <p>
                                        The Physical Environment
                                    </p>
                                    <p>
                                        Finance
                                    </p>
                                    <div>
                                        Where possible, we involve young people in the decision making process that affects
                                        the service we provide them. At each unit there are monthly meeting
                                        house where young people have an opportunity to make staff aware of their
                                        feelings, viewpoints and ideas. There is also a suggestion box where young
                                        people and staff can submit suggestions anonymously. Team meetings for the staff
                                        team take place on a monthly basis, and regular
                                        individual supervision sessions for each team member, giving staff the
                                        opportunity to voice their opinions and feedback to the Manager about the
                                        service being offered. Black Roses support will conduct annual appraisals for
                                        all staff and minimum quarterly feedbacks of young people using our services.
                                        Young people and those involved in their support are made aware of the
                                        service’s complaints policy, and are encouraged to offer feedback through
                                        individual reviews and family/significant others forums.
                                        All staff undertakes regular training which includes a minimum of:
                                    </div>
                                    <div class="roman-numerals" style="margin-top: 10px">
                                        <p>
                                            Safeguarding
                                        </p>
                                        <p>
                                            CSE
                                        </p>
                                        <p>
                                            CHANNEL
                                        </p>
                                        <p>
                                            FGM
                                        </p>
                                        <p>
                                            VET
                                        </p>
                                        <p>
                                            Alcohol Misuse
                                        </p>
                                        <p>
                                            Challenging Behaviour
                                        </p>
                                        <p>
                                            Cognitive Behavioural Therapy
                                        </p>
                                        <p>
                                            Communicating Effectively
                                        </p>
                                        <p>
                                            Confidentiality
                                        </p>
                                        <p>
                                            COSHH
                                        </p>
                                        <p>
                                            Diversity and Equality
                                        </p>
                                        <p>
                                            Drug Misuse
                                        </p>
                                        <p>
                                            First Aid Awareness
                                        </p>
                                        <p>
                                            Fire Training
                                        </p>
                                        <p>
                                            Food Hygiene
                                        </p>
                                        <p>
                                            Hand Hygiene
                                        </p>
                                        <p>
                                            Health & Safety
                                        </p>
                                        <p>
                                            Infection Control
                                        </p>
                                        <p>
                                            Mental Capacity
                                        </p>
                                        <p>
                                            Nutrition and Diet
                                        </p>
                                        <p>
                                            Post-Traumatic Stress Disorder
                                        </p>
                                        <p>
                                            Records Keeping
                                        </p>
                                        <p>
                                            Risk Assessment
                                        </p>
                                        <p>
                                            Self-Harm
                                        </p>
                                        <p>
                                            Stress Management
                                        </p>
                                        <p>
                                            Supervisions and Appraisals (Managers only)
                                        </p>
                                        <p>
                                            Safeguarding
                                        </p>
                                    </div>
                                </div>

                                <p class="strong-text" style="text-align: center; margin-top: 10px">External Inspections by
                                    Purchasers of the
                                    Service (Local Authorities)
                                </p>

                                <p>
                                    The service is subject to inspections and reviews by Local Authorities. Staff
                                    are to cooperate when such visits take place and appropriate information
                                    made available.
                                    Local Authorities may have access to their own young people files at any time.
                                </p>

                                <p class="strong-text" style="text-align: center; margin-top: 10px">External Inspections by
                                    Who are our clients?
                                </p>

                                <p>
                                    Black Roses Support is designed to support care leavers aged 16-25 in their
                                    transition to adulthood/ independent living.
                                    The service is provided for young people leaving local authorities’ care aged
                                    16-25 and unaccompanied asylum seekers aged 16-17
                                </p>
                            </div>
                            <p><b>Our service is available to Local Authorities from all over the UK.</b></p>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/governance.jpg" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
