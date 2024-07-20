@extends('admin.layouts.index')


@section('content')
    <div class="post d-flex flex-column-fluid mb-4" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-body p-lg-17">
                    <div class="mb-18">
                        <div class="mb-11">
                            <div class="text-center mb-18">
                                <h3 class="fs-2hx text-dark mb-6">Send Mail To Team</h3>
                                <div class="fs-5 text-muted fw-bold">Discover the dedicated individuals powering Black Roses
                                    Support's commitment to excellence and compassionate care. Get to know the faces behind
                                    our mission to provide unparalleled support and assistance.
                                </div>
                            </div>
                            <div class="overlay">
                                <livewire:mail-team.send-staff-mails />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
