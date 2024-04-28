@extends('admin.layouts.index')


@section('content')
    <div class="card mb-5 mb-xl-8 pb-4">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">All Applications</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
            {{-- <div class="d-flex align-items-center position-relative my-1 w-50">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" data-kt-user-table-filter="search"
                    class="form-control form-control-solid flex-grow-1 ps-14" placeholder="Search user"
                    style="width: 100%;" />
            </div> --}}
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                title="Click to add a Course">
                <a href="{{ route('post.job.vacancy') }}" class="btn btn-sm btn-light btn-active-primary">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                        </svg>
                    </span>New Job
                </a>
            </div>
        </div>
    </div>
    <div class="card-body py-3" id="kt_table_users">
        <div class="table-responsive">
            <div class="row">
                @forelse ($vaccancies as $vaccancy)
                    <div class="col-xl-4">
                        <div class="card mb-5 mb-xl-8 border border-2 rounded-4">
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-end">
                                    <div>
                                        <button class="btn btn-sm btn-primary"><a class="text-white" href="">View
                                                applications</a></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-5">
                                    <div class="d-flex align-items-center flex-grow-1">


                                        <div class="d-flex flex-column">
                                            <p class="text-gray-900 fs-6 mb-1 fw-bolder">{{ $vaccancy->title }}</p>
                                            <p class="text-gray-900 fs-6 mb-1 fw-bolder">
                                                @forelse ($vaccancy->type as $item)
                                                    {{ $item }}
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @empty
                                                @endforelse

                                            </p>
                                            <span class="text-gray-400 fw-bold">

                                        </div>
                                    </div>

                                </div>
                                <div class="mb-5">

                                    <div class="text-gray-800 mb-5">
                                        <span class="fw-bold">Schedule:</span>
                                        @forelse ($vaccancy->schedule  as $item)
                                            {{ $item }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @empty
                                        @endforelse
                                    </div>
                                    <div class="text-gray-800 mb-5">
                                        <span class="fw-bold">Location:</span>
                                        {{ $vaccancy->location }}
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center rounded">
                                            <form action="{{ route('toggle.job.applications.listing', [$vaccancy->uuid]) }}"
                                                method="POST" class="toggle-form">
                                                @method('PUT')
                                                @csrf
                                                <button
                                                    class="bg-transparent border-0 btn-outline-0 p-0 rounded toggle-button"
                                                    type="submit">
                                                    <div class="d-flex flex-stack">
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <input name="is_listed" class="form-check-input toggle-checkbox"
                                                                type="checkbox" value="1"
                                                                {{ $vaccancy->is_listed == 1 ? 'checked' : '' }}>
                                                            <span
                                                                class="form-check-label fw-bold text-muted toggle-label">{{ $vaccancy->is_listed == 1 ? 'Job is listed' : 'Job is not listed' }}</span>
                                                        </label>
                                                    </div>
                                                </button>
                                            </form>
                                        </div>

                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <div class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_add_user-{{ $vaccancy->uuid }}">
                                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <a href="#" class="btn btn-icon btn-bg-light btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete_job{{ $vaccancy->uuid }}"
                                                data-kt-users-table-filter="delete_row">
                                                <span class="svg-icon svg-icon-3 svg-icon-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.5"
                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.5"
                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" tabindex="-1" id="kt_modal_delete_job{{ $vaccancy->uuid }}">
                        <div class="modal-dialog">
                            <div class="modal-content text-center">
                                <div class="modal-header">
                                    <h1 class="modal-title text-dark text-uppercase">Delete Job Listing</h1>
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span class="svg-icon svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                    rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <span class="text-danger">This action will also delete all job applications for this
                                        listing</span>
                                    <p>Are you sure you want to delete?</p>
                                </div>

                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <x-delete href="/admin/all_courses/{{ $vaccancy->uuid }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="kt_modal_add_user-{{ $vaccancy->uuid }}" tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content rounded">
                                <div class="modal-header pb-0 border-0 justify-content-end">
                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                    rx="1" transform="rotate(-45 6 17.3137)"
                                                    fill="currentColor" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                    <form id="kt_modal_new_target_form" method="POST" class="form" action="">
                                        @method('PUT')
                                        @csrf
                                        <div class="mb-13 text-center">
                                            <h1 class="mb-3">Post a Job Vacancy</h1>
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Job Title</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Job Title" name="title"
                                                value="{{ old('title') }}" />
                                            @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2">Type</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select Job Type"
                                                    name="type[]">
                                                    <option value="">Select type...</option>
                                                    <option value="Full-time"
                                                        {{ in_array('Full-time', old('type', [])) ? 'selected' : '' }}>
                                                        Full-time</option>
                                                    <option value="Part-time"
                                                        {{ in_array('Part-time', old('type', [])) ? 'selected' : '' }}>
                                                        Part-time</option>
                                                    <option value="Zero hours contract"
                                                        {{ in_array('Zero hours contract', old('type', [])) ? 'selected' : '' }}>
                                                        Zero hours
                                                        contract</option>
                                                    <option value="Permanent"
                                                        {{ in_array('Permanent', old('type', [])) ? 'selected' : '' }}>
                                                        Permanent</option>
                                                </select>
                                                @error('type')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                                <div class="position-relative d-flex align-items-center">
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <input type="date" class="form-control form-control-solid ps-12"
                                                        placeholder="Select a date" name="due_date"
                                                        value="{{ old('due_date') }}" />
                                                </div>
                                                @error('due_date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-bold mb-2">Schedule</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select Job Schedule"
                                                    name="schedule[]" multiple>
                                                    <option value="">Select Schedule...</option>
                                                    <option value="16 hours"
                                                        {{ in_array('16 hours', old('schedule', [])) ? 'selected' : '' }}>
                                                        16 hours</option>
                                                    <option value="10 hours"
                                                        {{ in_array('10 hours', old('schedule', [])) ? 'selected' : '' }}>
                                                        10 hours</option>
                                                    <option value="8 hours"
                                                        {{ in_array('8 hours', old('schedule', [])) ? 'selected' : '' }}>8
                                                        hours</option>
                                                    <option value="6 hours"
                                                        {{ in_array('6 hours', old('schedule', [])) ? 'selected' : '' }}>6
                                                        hours</option>
                                                </select>
                                                @error('schedule')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Job Benefits</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter Job Benefits" name="benefits"
                                                    value="{{ old('benefits') }}" />
                                                @error('benefits')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Job Location</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter Job Location" name="location"
                                                    value="{{ old('location') }}" />
                                                @error('location')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Job Postcode</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter Job Postcode" name="postcode"
                                                    value="{{ old('postcode') }}" />
                                                @error('postcode')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Job Pay Rate</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Job Pay Rate" name="pay_rate"
                                                value="{{ old('pay_rate') }}" />
                                            @error('pay_rate')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="row g-9 mb-8">
                                            <div class="col-md-6 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Contact</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Home Manager" name="contact" value="Home Manager" />
                                                @error('contact')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Salary</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference"></i>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter Salary" name="salary"
                                                    value="{{ old('salary') }}" />
                                                @error('salary')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-bold mb-2">Job Description</label>
                                            <textarea id="description" class="form-control form-control-solid" rows="3" name="description" disabled
                                                placeholder="Please visit the application page to view the complete description">{{ 'Please visit the application page to view the complete description' }}</textarea>
                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-bold mb-2">Responsibility</label>
                                            <textarea id="responsibility" class="form-control form-control-solid" rows="3" name="responsibility" disabled
                                                placeholder="Please visit the application page to view the complete responsibilities.">{{ 'Please visit the application page to view the complete responsibilities.' }}</textarea>
                                            @error('responsibility')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="d-flex flex-column mb-8">
                                            <label class="fs-6 fw-bold mb-2">Requirements</label>
                                            <textarea id="requirements" class="form-control form-control-solid" rows="3" name="requirement" disabled
                                                placeholder="Please visit the application page to view the complete requirements.">{{ 'Please visit the application page to view the complete requirements.' }}</textarea>
                                            @error('requirement')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="text-center">
                                            <button type="reset" id="kt_modal_new_target_cancel"
                                                class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" id="kt_modal_new_target_submit"
                                                class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>

            {{-- {{ $departments->links() }} --}}
        </div>
    </div>


    <script>
        // Function to handle checkbox change event
        function handleCheckboxChange(event) {
            var checkbox = event.target; // Get the checkbox that was clicked
            var form = checkbox.closest('form'); // Find the closest form element relative to the checkbox
            var formData = new FormData(form); // Create FormData object from the form

            fetch(form.action, {
                    method: 'PUT',
                    body: formData,
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Assuming data contains the response from the server
                    console.log('Success:', data);
                    // Update the label text based on server response
                    var label = form.querySelector('.toggle-label');
                    label.textContent = data.is_listed ? 'Job is listed' : 'Job is not listed';
                })
                .catch(error => {
                    // Log any errors
                    console.error('Error:', error);
                });
        }

        // Add event listener to the checkbox
        document.querySelectorAll('.toggle-checkbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', handleCheckboxChange);
        });
    </script>
@endsection
