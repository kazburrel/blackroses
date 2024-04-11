@extends('layout.index')

@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Our Blog</h1>
            <div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Our Blog</li>
                </ul>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--News Classic View-->
                    <section class="news-classic-view">

                        <!--News Style Three-->
                        <div class="news-style-three">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img
                                            src="images/resource/blog-image-6.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-header clearfix">
                                        <div class="pull-left">
                                            <h3><a href="blog-single.html">SAVE KIDS DREAMS</a></h3>
                                            <div class="post-info">Posted by <a href="#">Admin</a> | <a
                                                    href="#">JUNE 6,2016</a> </div>
                                        </div>
                                        <div class="post-meta pull-right"><a href="#"><span
                                                    class="fa fa-heart-o"></span> 3</a> &ensp;&ensp; <a href="#"><span
                                                    class="fa fa-comment-o"></span> 7</a></div>
                                    </div>
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high
                                        level overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. </div>
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-double-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!--News Style Three-->
                        <div class="news-style-three">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <!--Video Box-->
                                    <div class="video-box">
                                        <div class="video-outer">
                                            <iframe height="400" allowfullscreen=""
                                                src="//player.vimeo.com/video/56999995?color=ffffff"></iframe>
                                        </div>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <div class="post-header clearfix">
                                        <div class="pull-left">
                                            <h3><a href="blog-single.html">THE TEARS OF THE PLEASURE</a></h3>
                                            <div class="post-info">Posted by <a href="#">Admin</a> | <a
                                                    href="#">JUNE 6,2016</a> </div>
                                        </div>
                                        <div class="post-meta pull-right"><a href="#"><span
                                                    class="fa fa-heart-o"></span> 3</a> &ensp;&ensp; <a href="#"><span
                                                    class="fa fa-comment-o"></span> 7</a></div>
                                    </div>
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high
                                        level overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. </div>
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-double-right"></span></a>
                                </div>
                            </div>
                        </div>

                        <!--News Style Three-->
                        <div class="news-style-three">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img
                                            src="images/resource/blog-image-7.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-header clearfix">
                                        <div class="pull-left">
                                            <h3><a href="blog-single.html">ELDERLY CARE AND SUPPORT VOLUNTEERING</a></h3>
                                            <div class="post-info">Posted by <a href="#">Admin</a> | <a
                                                    href="#">JUNE 6,2016</a> </div>
                                        </div>
                                        <div class="post-meta pull-right"><a href="#"><span
                                                    class="fa fa-heart-o"></span> 3</a> &ensp;&ensp; <a href="#"><span
                                                    class="fa fa-comment-o"></span> 7</a></div>
                                    </div>
                                    <div class="text">Leverage agile frameworks to provide a robust synopsis for high
                                        level overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. </div>
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-double-right"></span></a>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination">
                        <ul>
                            <li><a class="prev" href="#"><span class="fa fa-angle-double-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#"><span class="fa fa-angle-double-right"></span></a></li>
                        </ul>
                    </div>

                </div><!--End Content Side-->

                <!--Sidebar-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="widget search-box sidebar-widget">
                            <div class="sidebar-title">
                                <h3>Search</h3>
                            </div>
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value=""
                                        placeholder="Search the Blog">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>

                        </div>

                        <!-- Latest Posts -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title">
                                <h3>Latest Posts</h3>
                            </div>

                            <ul class="list">
                                <li><a href="#">Fundraising</a></li>
                                <li><a href="#">Protect Our Children</a></li>
                                <li><a href="#">Charity Marathon</a></li>
                                <li><a href="#">Cancer Research Funding</a></li>
                                <li><a href="#">Audio Post</a></li>
                            </ul>

                        </div>

                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title">
                                <h3>CAUSE CATEGORIES</h3>
                            </div>

                            <ul class="list">
                                <li><a href="#">Awareness</a></li>
                                <li><a href="#">Children Aid</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Life Saving</a></li>
                                <li><a href="#">Seniors</a></li>
                            </ul>

                        </div>

                        <!-- Recent Gallery -->
                        <div class="widget recent-gallery sidebar-widget">
                            <div class="sidebar-title">
                                <h3>LATEST FROM GALLERY</h3>
                            </div>

                            <div class="images-outer clearfix">
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-2.jpg" alt=""></a></figure>
                                </div>
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-4.jpg" alt=""></a></figure>
                                </div>
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-5.jpg" alt=""></a></figure>
                                </div>
                                <div class="gallery-post">
                                    <figure class="image"><a href="images/gallery/10.jpg" class="lightbox-image"
                                            data-fancybox-group="example-gallery" title="Image Caption"><img
                                                src="images/gallery/thumb-6.jpg" alt=""></a></figure>
                                </div>
                            </div>

                        </div>

                        <!-- Popular Tags -->
                        <div class="widget sidebar-widget popular-tags">
                            <div class="sidebar-title">
                                <h3>TAG CLOUD</h3>
                            </div>

                            <a href="#">Awareness</a>
                            <a href="#">Educaton</a>
                            <a href="#">Food</a>
                            <a href="#">Children Aid</a>
                            <a href="#">Health</a>
                            <a href="#">Life Saving</a>
                            <a href="#">Seniors</a>
                            <a href="#">Homeless</a>

                        </div>

                    </aside>
                </div><!--End Sidebar-->

            </div>
        </div>
    </div>
@endsection
