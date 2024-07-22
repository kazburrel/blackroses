@extends('admin.layouts.index')
@section('content')
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-body p-lg-17">
                <div class="mb-18">
                    <div class="mb-11">
                        <div class="text-center mb-18">
                            <h3 class="fs-2hx text-dark mb-6">Send Mail To Team</h3>
                            <div class="fs-5 text-muted fw-bold">Send a message to the dedicated team members who drive Black
                                Roses Support's mission of excellence and compassionate care.
                            </div>
                        </div>
                        <div class="overlay">
                            <livewire:mail-team.send-staff-mails :staffUsers="$staffUsers" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
