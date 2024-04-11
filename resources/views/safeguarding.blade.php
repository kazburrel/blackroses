@extends('layout.index')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Our Gallery</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">

            <!--Sortable Masonry-->
            <div class="sortable-masonry mixed-gallery-section">

                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".charity">Charity</li>
                        <li class="filter" data-role="button" data-filter=".education">Education</li>
                        <li class="filter" data-role="button" data-filter=".health">Health</li>
                        <li class="filter" data-role="button" data-filter=".food">Food</li>
                        <li class="filter" data-role="button" data-filter=".fundraising">Fundraising</li>
                        <li class="filter" data-role="button" data-filter=".volunteering">Volunteering</li>
                    </ul>
                </div>


                <div class="items-container row clearfix">

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item masonry-item all volunteering col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item all charity health food fundraising volunteering col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div class="default-portfolio-item masonry-item all health fundraising col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item all charity education health food col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item charity all education health fundraising col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item charity all education fundraising col-md-12 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item all charity health fundraising col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/7.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item all education food volunteering col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/8.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Portfolio Item-->
                    <div
                        class="default-portfolio-item masonry-item all charity education food col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/9.jpg" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                        <a href="images/gallery/10.jpg" class="lightbox-image image-link"
                                            data-fancybox-group="example-gallery" title="SAVE KIDS DREAMS"><span
                                                class="icon fa fa-search-plus"></span></a>
                                        <a href="blog-single.html" class="image-link"><span
                                                class="icon fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!--End Sortable Masonry-->

            <div class="load-more text-center"><a href="#" class="theme-btn btn-style-three"><span
                        class="fa fa-repeat"></span> &ensp; LOAD MORE</a></div>
        </div>

    </section>
@endsection
