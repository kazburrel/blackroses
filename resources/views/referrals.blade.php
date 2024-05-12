@extends('layout.index')

@section('content')
    {{-- <style>
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
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
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
            <div class="sec-title centered">
            </div>
            <div class="content-box">
                <div class="row clearfix">
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">

                                <div class="desc-text">
                                    The referral process begins with an enquiry, by telephone, email or letter.
                                    The service will then ask for a referral form to be sent, giving brief information
                                    about
                                    the potential young people and their risks as well as support needs. This form can be
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
                                <h5 class="strong-text" style="text-align: center;">The Assessment Process</h5>
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

                                <h5 class="strong-text" style="text-align: center;margin-top: 15px">
                                    The Admission Process
                                </h5>
                                <div class="numbered-list">
                                    <p>
                                        If the outcome of the assessment is that the service can meet the needs of the
                                        potential young people, they will then be invited to visit the appropriate
                                        property. This will give them the opportunity to look around, meet other young
                                        people of
                                        the property and ask questions or seek clarification about anything they are
                                        unsure of.
                                    </p>
                                    <p>
                                        If the potential young people likes the service and there is an appropriate vacancy
                                        for
                                        them
                                        and funding for their placement has been approved, a transition plan is then
                                        agreed with the placing Local Authority. This can include both day and overnight
                                        visits to help the young people settle in to their new environment. If there are no
                                        concerns
                                        from the young people or the service during this period, an admission date to the
                                        service
                                        is then agreed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/referals.jpg" alt=""></figure>
                    </div>

                </div>
                <div style="margin-top: 25px" class="row clearfix">
                    <div class="content-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="text-content">
                                <h5 class="strong-text" style="text-align: center;">Emergency Admission.</h5>

                                <div class="desc-text">
                                    In the case of emergency admission requests, an initial assessment including
                                    ImRA will be completed at the time of the referral. If the service can offer a
                                    suitable support placement and funding is confirmed by the placing Local
                                    Authority, the new young people will be able to move in.
                                    The Service Provision (unit) will inform the new young people of all key
                                    aspects, procedures and routines of the property at the admission. Placement
                                    Planning Meeting is then arranged with the allocated social worker on the next
                                    working day. PPM should be completed within first week.
                                </div>
                                <h5 class="strong-text" style="text-align: center;">Accommodation</h5>
                                <div>
                                    Black Roses Support recognises that every prospective young people should have the
                                    opportunity to choose a home which suits their needs. To facilitate that choice,
                                    we do the following:
                                </div>
                                <div class="numbered-list">
                                    <p>
                                        Provide detailed information on the service by publishing a young people User
                                        Guide.
                                    </p>
                                    <p>
                                        Give each young person an Agreement specifying the terms of the service and
                                        accommodation.
                                    </p>
                                    <p>
                                        Ensure that every prospective young person has their needs thoroughly assessed
                                        before
                                        a decision on admission is taken.
                                    </p>
                                    <p>
                                        Demonstrate to every person about to be offered the service that we are
                                        confident that we can meet their needs as assessed.
                                    </p>
                                    <p>
                                        Offer introductory visits to prospective young person and avoid unplanned admissions
                                        except in cases of emergency.
                                    </p>
                                </div>

                                <h4 class="strong-" style="text-align: center;margin-top: 15px">
                                    There are a number of properties, which are intended to provide environments
                                    where young people are able to experience supported living in the community.
                                </h4>

                            </div>
                        </div>
                    </div>

                    <div class="image-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <figure class="image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img
                                src="images/resource/add.png" alt=""></figure>
                    </div>

                </div>
            </div>

        </div>
    </section> --}}
    <script>
        // JavaScript code for initializing the map
        function initMap() {
            var mapOptions = {
                zoom: 10,
                center: {
                    lat: 23.815811,
                    lng: 90.412580
                },
                mapTypeId: 'roadmap',
                styles: [
                    // Include any custom map styles here if needed
                ]
            };
            var map = new google.maps.Map(document.querySelector('.map-canvas'), mapOptions);
        }



        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.display = 'none';
            }
        }, 5000);
    </script>
    <!-- / Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
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


    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Form Column -->
                <div class="column form-column pull-right col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="default-title">
                        <h3>SEND US A MESSAGE</h3>
                        <div class="separator"></div>
                    </div>
                    <!--form-box-->
                    <div class="form-box default-form">
                        <div class="contact-form default-form">
                            <form method="post" action="{{ route('contact.send') }}" id="contactForm">
                                @csrf
                                {{-- <input type="hidden" name="full_name" value="hi"> --}}
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Full Name <span>*</span></div>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            placeholder="Enter your full name" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email <span>*</span></div>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            placeholder="Enter your email address" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Subject <span>*</span></div>
                                        <input type="text" name="subject" value="{{ old('subject') }}"
                                            placeholder="Enter the subject">
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Message <span>*</span></div>
                                        <textarea name="message">{{ old('message') }}</textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="g-recaptcha theme-btn btn-style-three"
                                            data-sitekey="{{ config('services.recaptcha.key') }}" data-callback='onSubmit'
                                            data-action='contactForm'
                                            style="display: block; margin-top: 80px;">SUBMIT</button>
                                    </div>


                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column info-column pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="default-title">
                        <h3>GET IN TOUCH</h3>
                        <div class="separator"></div>
                    </div>
                    <div class="info">
                        <div class="row clearfix">
                            <!--Info Column-->
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                                        <h4>ADDRESS</h4>
                                        <div class="text">{{ $setting->address }}, UK <br> {{ $setting->postcode }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Info Column-->
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-envelope"></span></div>
                                        <h4>EMAIL</h4>
                                        <div class="text">{{ $setting->email }}</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-technology"></span></div>
                                        <h4>PHONE NO</h4>
                                        <div class="text">{{ $setting->phone }}</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>


    <!--Map Section-->
    {{-- <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=69%20Granville%20Avenue%20Slough%20+(Black%20roses%20support)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps trackers</a></iframe>
            </div>

        </div>
    </section> --}}
    @push('scripts')
        <script>
            function onSubmit(token) {
                document.getElementById("contactForm").submit();
            }
        </script>
    @endpush
@endsection
