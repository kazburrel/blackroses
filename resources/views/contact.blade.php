@extends('layout.index')

@section('content')
    <!-- / Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
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
                    <div class="default-title">
                        <h3>SEND US A MESSAGE</h3>
                        <div class="separator"></div>
                    </div>
                    <!--form-box-->
                    <div class="form-box default-form">
                        <div class=" default-form">
                            <div class="row clearfix">

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Name <span class="req">*</span></div>
                                    <input type="text" name="username" value="" required>
                                </div>

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email <span class="req">*</span></div>
                                    <input type="email" name="email" value="" required>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Subject <span class="req">*</span></div>
                                    <input type="text" name="subject" value="">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Message <span class="req">*</span></div>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-three">SUBMIT </button>
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
                                        <div class="text">P6 12th Street, Olive Building Newyork, USA</div>
                                    </div>
                                </div>
                            </div>

                            <!--Info Column-->
                            <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-envelope"></span></div>
                                        <h4>EMAIL</h4>
                                        <div class="text">mail@humanwelfare.com</div>
                                    </div>
                                </div>

                                <div class="info-box">
                                    <div class="inner">
                                        <div class="icon"><span class="flaticon-technology"></span></div>
                                        <h4>PHONE NO</h4>
                                        <div class="text">+12345 06 789</div>
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
            <div class="map-canvas" data-zoom="10" data-lat="23.815811" data-lng="90.412580" data-type="roadmap"
                data-hue="#fc721e" data-title="Dhaka"
                data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                style="height:480px;">
            </div>

        </div>
    </section>
@endsection
