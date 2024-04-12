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
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1> Referrals</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Referrals</li>
                </ul>
            </div>
        </div>


    </section>
    <section class="about-us-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">

                {{-- <div class="separator"></div> --}}

            </div>
            <!--Content Box-->
            <div class="content-box">
                <div class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                {{-- <p class="strong-text" style="text-align: center;">Service Facilities.</p> --}}

                                <div class="desc-text">
                                    The referral process begins with an enquiry, by telephone, email or letter.
                                    The service will then ask for a referral form to be sent, giving brief information
                                    about
                                    the potential client and their risks as well as support needs. This form can be
                                    completed
                                    by a social worker and/or other professionals.
                                    A review of this information is then undertaken to assess whether the service can
                                    potentially meet the needs of the individual being referred. If the service
                                    determines
                                    that they can meet the needs of the referred person, an Impact Risk Assessment
                                    (ImRA) is completed by a Unit Manager from identified placement to highlight if
                                    there
                                    are any impact risks for the referred young person as well as existing young people
                                    in
                                    our service.
                                </div>
                                <h2 class="strong-text" style="text-align: center;">The Assessment Process</h2>
                                <div class="numbered-list">
                                    <p>
                                        Current support needs of the young person referred
                                    </p>
                                    <p>
                                        Identified areas of risk of the young person referred
                                    </p>
                                    <p>
                                        What they are seeking from the service (Outcomes)
                                    </p>
                                    <p>
                                        Proposed plan of support to be offered by the service
                                    </p>
                                </div>

                                <h2 class="strong-text" style="text-align: center;margin-top: 15px">
                                    The Admission Process
                                </h2>
                                <div class="numbered-list">
                                    <p>
                                        If the outcome of the assessment is that the service can meet the needs of the
                                        potential client (young person), they will then be invited to visit the appropriate
                                        property. This will give them the opportunity to look around, meet other clients of
                                        the property and ask questions or seek clarification about anything they are
                                        unsure of.
                                    </p>
                                    <p>
                                        If the potential client likes the service and there is an appropriate vacancy for
                                        them
                                        and funding for their placement has been approved, a transition plan is then
                                        agreed with the placing Local Authority. This can include both day and overnight
                                        visits to help the client settle in to their new environment. If there are no
                                        concerns
                                        from the client or the service during this period, an admission date to the service
                                        is then agreed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/referals.jpg" alt=""></figure>
                    </div>

                </div>
                <div style="margin-top: 25px" class="row clearfix">
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <h2 class="strong-text" style="text-align: center;">Emergency Admission.</h2>

                                <div class="desc-text">
                                    In the case of emergency admission requests, an initial assessment including
                                    ImRA will be completed at the time of the referral. If the service can offer a
                                    suitable support placement and funding is confirmed by the placing Local
                                    Authority, the new client (young person) will be able to move in.
                                    The Service Provision (unit) will inform the new client (young person) of all key
                                    aspects, procedures and routines of the property at the admission. Placement
                                    Planning Meeting is then arranged with the allocated social worker on the next
                                    working day. PPM should be completed within first week.
                                </div>
                                <h2 class="strong-text" style="text-align: center;">Accommodation</h2>
                                <div>
                                    Black Roses Support recognises that every prospective client should have the
                                    opportunity to choose a home which suits their needs. To facilitate that choice,
                                    we do the following:
                                </div>
                                <div class="numbered-list">
                                    <p>
                                        Provide detailed information on the service by publishing a young people User
                                        Guide.
                                    </p>
                                    <p>
                                        Give each client a Client Agreement specifying the terms of the service and
                                        accommodation.
                                    </p>
                                    <p>
                                        Ensure that every prospective client has their needs thoroughly assessed before
                                        a decision on admission is taken.
                                    </p>
                                    <p>
                                        Demonstrate to every person about to be offered the service that we are
                                        confident that we can meet their needs as assessed.
                                    </p>
                                    <p>
                                        Offer introductory visits to prospective clients and avoid unplanned admissions
                                        except in cases of emergency.
                                    </p>
                                </div>

                                <h4 class="strong-" style="text-align: center;margin-top: 15px">
                                    There are a number of properties, which are intended to provide environments
                                    where clients are able to experience supported living in the community.
                                </h4>

                            </div>
                        </div>
                    </div>

                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/add.png" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
