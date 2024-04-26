@extends('layout.index')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/main-slider/image-1.jpg);">
        <div class="auto-container">
            <h1>About Us</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Team</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Our Team-->
    <section class="team-section">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title centered">
                <h2>MEET OUR TEAM</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                <!--Default Team Member-->
                <div class="default-team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/latoya_main.jpeg"
                                        alt=""></a>
                            </figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>LATOYA HUGHES</h3>
                                <p><b>Founder & CEO</b></p>
                                <div class="text">Latoya Hughes, a distinguished Senior Social Worker, embodies a profound
                                    commitment to uplifting marginalized youth. With a rich background in local authority
                                    services, Latoya has honed her expertise in navigating the complexities of youth
                                    welfare, particularly in areas fraught with challenges like serious youth violence,
                                    child exploitation, and NEET circumstances.

                                    As the driving force behind Black Roses Support, Latoya channels her passion into a
                                    transformative vision: to provide a lifeline for young individuals grappling with
                                    adversity. Drawing from her frontline experiences, she understands the nuanced needs of
                                    the community and leverages this insight to tailor interventions that resonate deeply
                                    with those they serve.

                                    Under Latoya's leadership, Black Roses Support operates as more than just a service
                                    provider; it's a beacon of hope and empowerment. Through a holistic approach that
                                    integrates physical activities such as boxing and football with mentoring and skills
                                    training, Latoya fosters an environment where youth not only find refuge but also
                                    discover their innate potential to thrive.

                                    Central to Black Roses Support's ethos is the belief in the inherent worth of every
                                    individual. Latoya and her team go beyond surface-level interventions, delving into the
                                    root causes of societal issues and offering tailored support that addresses the
                                    multifaceted needs of their beneficiaries.

                                    With a steadfast commitment to social justice and community well-being, Latoya Hughes
                                    stands as a beacon of resilience and compassion in the field of social work. Through her
                                    unwavering dedication and innovative approaches, she continues to make a profound
                                    impact, one life at a time.
                                </div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="https://uk.linkedin.com/in/latoya-hughes-a91714217"><span
                                            class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Team Member-->
                {{-- <div class="default-team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-2.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>FRUKLEIN</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!--Default Team Member-->
                {{-- <div class="default-team-member alternate col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-3.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>DONALD JAMES</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Team Member-->
                <div class="default-team-member alternate col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-4.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>ABRAHAM</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Team Member-->
                <div class="default-team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-5.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>KIMBERLEY</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Team Member-->
                <div class="default-team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-6.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>MEREDIM</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Default Team Member-->
                <div class="default-team-member alternate col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-7.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>MARIYA</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Default Team Member-->
                <div class="default-team-member alternate col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box clearfix">
                        <!--Image Column-->
                        <div class="image-column">
                            <figure class="image"><a href="#"><img src="images/resource/team-image-8.jpg"
                                        alt=""></a></figure>
                        </div>
                        <!--Content Column-->
                        <div class="content-column">
                            <div class="inner">
                                <h3>JUSTIN LUTHER</h3>
                                <div class="text">Please stop looking at your phone and pet me rub face on owner for have
                                    secret</div>
                                <div class="social-links">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
    </section>
@endsection
