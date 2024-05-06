@extends('admin.layouts.index')


@section('content')
    <div class="card mb-5 mb-xl-10">
        <div class="card-header cursor-pointer">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
            <a href="{{ route('get.user.profile.edit') }}" class="btn btn-primary align-self-center">Edit Profile</a>
        </div>
        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Full Name</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">{{ $user->fname }} {{ $user->lname }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Company</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{ config('app.name') }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Email</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-bold text-gray-800 fs-6">{{ $user->email }}</span>
                </div>
            </div>
            {{-- <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Contact Phone
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                        title="Phone number must be active"></i></label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $user->phone }}</span>
                    <span class="badge badge-success">Verified</span>
                </div>
            </div> --}}
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Company Site</label>
                <div class="col-lg-8">
                    <a href="#" class="fw-bold fs-6 text-primary text-hover-primary">{{ config('app.url') }}</a>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Country
                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                        title="Country of origination"></i></label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">UK</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Communication</label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">Email, Phone</span>
                </div>
            </div>

            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted">Role</label>
                <div class="col-lg-8">
                    @foreach ($user->roles as $role)
                        <span class="fw-bolder fs-6 text-gray-800">{{ ucfirst($role->name) }}</span>
                    @endforeach

                </div>
            </div>
            <div class="row mb-10">
                <label class="col-lg-4 fw-bold text-muted">Allow Changes</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Yes</span>
                </div>
            </div>
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                            fill="currentColor" />
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                            fill="currentColor" />
                    </svg>
                </span>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-bold">
                        <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                        <div class="fs-6 text-gray-700">Admins, you're in charge! You have the permission to register and
                            manage young persons and staff with ease. Your actions shape our community's future. Keep up the
                            great work!
                            {{-- <a class="fw-bolder" href="../../demo1/dist/account/billing.html">Add Payment Method</a>. --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
