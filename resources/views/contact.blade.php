@extends('layout.index')

@section('content')
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
            <h1>Contact Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Contact Us</li>
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
                            <form method="post" action="{{ route('contact.send') }}">
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
                                    @if (config('services.recaptcha.key'))
                                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"
                                            style="margin-bottom: 50px;">
                                        </div>
                                    @endif

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-three"
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
    <section class="map-section">
        <div class="map-outer">

            <!--Map Canvas-->
            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=69%20Granville%20Avenue%20Slough%20+(Black%20roses%20support)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.gps.ie/">gps trackers</a></iframe>
            </div>

        </div>
    </section>
@endsection
