@extends('admin.layouts.index')


@section('content')
    <div class="post d-flex flex-column-fluid mb-4" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-lg-17">
                    <div class="mb-18">
                        <div class="mb-11">
                            <div class="text-center mb-18">
                                <h3 class="fs-2hx text-dark mb-6">Meet Our Team</h3>
                                <div class="fs-5 text-muted fw-bold">Discover the dedicated individuals powering Black Rose
                                    Support's commitment to excellence and compassionate care. Get to know the faces behind
                                    our mission to provide unparalleled support and assistance.
                                </div>
                            </div>
                            <div class="overlay">
                                <img class="w-100 card-rounded"
                                    src="{{ asset('admin_assets/media/stock/1600x800/img-1.jpg') }}" alt="" />
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="fs-5 fw-bold text-gray-600">
                            <p class="m-0">First, a disclaimer – the entire process of writing a blog post often takes
                                more than a couple of hours, even if you can type eighty words per minute and your writing
                                skills are sharp. From the seed of the idea to finally hitting “Publish,” you might spend
                                several days or maybe even a week “writing” a blog post, but it’s important to spend those
                                vital hours planning your post and even thinking about
                                <a href="../../demo1/dist/pages/blog/post.html" class="link-primary pe-1">Your Post</a>(yes,
                                thinking counts as working if you’re a blogger) before you actually write it.
                            </p>
                        </div> --}}
                    </div>
                    <div class="mb-18">
                        <div class="text-center mb-17">
                            <h3 class="fs-2hx text-dark mb-5">Our Great Team</h3>
                            <div class="fs-5 text-muted fw-bold">A collective of passionate individuals dedicated to
                                delivering exceptional service and making a positive impact every step of the way.
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Paul Miles</a>
                                    <div class="text-muted fs-6 fw-bold">Development Lead</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Jania Garnbet</a>
                                    <div class="text-muted fs-6 fw-bold">Creative Director</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-16.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">James Nilson</a>
                                    <div class="text-muted fs-6 fw-bold">Python Expert</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Mia Miles</a>
                                    <div class="text-muted fs-6 fw-bold">Project Manager</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-10.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Sophia Miles</a>
                                    <div class="text-muted fs-6 fw-bold">Art Director</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Oliver Lucas</a>
                                    <div class="text-muted fs-6 fw-bold">Marketing Manager</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Amelia Miles</a>
                                    <div class="text-muted fs-6 fw-bold">QA Managers</div>
                                </div>
                            </div>
                            <div class="col text-center mb-9">
                                <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                    style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
                                <div class="mb-0">
                                    <a href="../../demo1/dist/pages/user-profile/projects.html"
                                        class="text-dark fw-bolder text-hover-primary fs-3">Liam James</a>
                                    <div class="text-muted fs-6 fw-bold">QA Managers</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
