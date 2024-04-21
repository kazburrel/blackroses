<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body>

    <div class="page-wrapper">
        <div class="preloader"></div>
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Form Column -->
                    <div class="column form-column pull-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                            <div style="display: flex; justify-content: space-between;">
                                <h3 style="display: inline-block; margin-right: 10px;">Apply for <span
                                        style="color: #fa6f1c;">{{ $job->title }}</span> role</h3>
                                <a href="{{ asset('path/to/your/pdf/file.pdf') }}" download
                                    style="color: blue;">Download Job Description and Person specification</a>
                            </div>


                            <div class="separator"></div>
                        </div>
                        <div class="form-box default-form">
                            <div class="contact-form default-form">
                                <form method="post" action="{{ route('contact.send') }}">
                                    @csrf
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

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone Number <span>*</span></div>
                                            <input type="text" name="phone" value="{{ old('phone') }}"
                                                placeholder="Enter the phone number">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div style="">
                                                <div class="field-label">CV <span>*</span></div>
                                                <input type="file" name="phone" value="{{ old('cv') }}"
                                                    style="border: 1px solid #ccc; width: 97.5%; padding: 9.5px;">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Location/Town <span>*</span></div>
                                            <div style="display: flex;">
                                                <input type="text" name="location" value="{{ old('location') }}"
                                                    placeholder="Enter your Location">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Country <span>*</span></div>
                                            <select name="country">
                                                @foreach (config('country') as $code => $name)
                                                    <option value="{{ $code }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Right To Work <span>*</span> <span
                                                    style="color: #fa6f1c;"><i>Do you have the full right to
                                                        work?</i></span></div>
                                            <select name="right_to_work">
                                                <option value="">Please choose</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">
                                                Driving License <span>*</span>
                                                <span style="color: #fa6f1c;"><i>Do you have a driver's
                                                        license?</i></span>
                                            </div>
                                            <select name="driver_license">
                                                <option value="">Please select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="theme-btn btn-style-three">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>
    <footer class="main-footer" style="margin-bottom: 0">
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">Copyright &copy; {{ date('Y') }}. All Rights Reserved
                    {{ config('app.name') }} </div>
            </div>
        </div>
    </footer>

    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/revolution.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
