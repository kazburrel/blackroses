<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure><a href="{{ route('home') }}"><img src="images/Black Roses Support-03.png"
                                                style="width: 230px; height: 80px;" alt=""></a>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">

                                    </div>

                                    <div class="social-links" style="margin-top: 58px">
                                        <a href="{{ $setting->facebook }}"><span class="fa fa-facebook"></span></a>
                                        <a href="{{ $setting->linkedln }}"><span class="fa fa-linkedin"></span></a>
                                        <a href="{{ $setting->instagram }}"><span class="fa fa-instagram"></span></a>
                                        <a href="{{ $setting->twitter }}"><span class="fa fa-twitter"></span></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">

                            </div>

                        </div>

                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget posts-widget">

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h2>Contact Us</h2>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li>{{ $setting->address }}, UK <br>{{ $setting->postcode }}</li>
                                        <li>{{ $setting->phone }}</li>
                                        <li>{{ $setting->email }} </li>
                                    </ul>

                                    <!--Newsletter One-->
                                    <div class="newsletter-one">
                                        {{-- <h4>Subscribe to our newsletter</h4>
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" required
                                                    placeholder="Your Email">
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-paper-plane"></span></button>
                                            </div>
                                        </form> --}}
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text">Copyright &copy; {{ date('Y') }}. All Rights Reserved
                {{ config('app.name') }} </div>
        </div>
    </div>
</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
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

@stack('scripts')
@include('sweetalert::alert')
</body>

</html>
