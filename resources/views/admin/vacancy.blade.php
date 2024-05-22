@extends('admin.layouts.index')


@section('content')
    <div class="card mb-5 mb-xl-8 pb-4">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">All Vacancy</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
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
                                        <button class="btn btn-sm btn-primary"><a class="text-white"
                                                href="{{ route('get.job.application.uuid', [$vaccancy->uuid]) }}">View
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
                                    <form id="kt_modal_new_target_form" method="POST" class="form"
                                        action="{{ route('update.job.vacancy', [$vaccancy->uuid]) }}">
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
                                                value="{{ old('title', $vaccancy->title) }}" />
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
                                                        {{ in_array('Full-time', old('type', $vaccancy->type) ?: []) ? 'selected' : '' }}>
                                                        Full-time</option>
                                                    <option value="Part-time"
                                                        {{ in_array('Part-time', old('type', $vaccancy->type) ?: []) ? 'selected' : '' }}>
                                                        Part-time</option>
                                                    <option value="Zero hours contract"
                                                        {{ in_array('Zero hours contract', old('type', $vaccancy->type) ?: []) ? 'selected' : '' }}>
                                                        Zero hours contract</option>
                                                    <option value="Permanent"
                                                        {{ in_array('Permanent', old('type', $vaccancy->type) ?: []) ? 'selected' : '' }}>
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
                                                        <!-- SVG icon here -->
                                                    </span>
                                                    <input type="date" class="form-control form-control-solid ps-12"
                                                        placeholder="Select a date" name="due_date"
                                                        value="{{ old('due_date', $vaccancy->due_date) }}" />
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
                                                        {{ in_array('16 hours', old('schedule', $vaccancy->schedule) ?: []) ? 'selected' : '' }}>
                                                        16 hours</option>
                                                    <option value="10 hours"
                                                        {{ in_array('10 hours', old('schedule', $vaccancy->schedule) ?: []) ? 'selected' : '' }}>
                                                        10 hours</option>
                                                    <option value="8 hours"
                                                        {{ in_array('8 hours', old('schedule', $vaccancy->schedule) ?: []) ? 'selected' : '' }}>
                                                        8 hours</option>
                                                    <option value="6 hours"
                                                        {{ in_array('6 hours', old('schedule', $vaccancy->schedule) ?: []) ? 'selected' : '' }}>
                                                        6 hours</option>
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
                                                    value="{{ old('benefits', $vaccancy->benefits) }}" />
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
                                                    value="{{ old('location', $vaccancy->location) }}" />
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
                                                    value="{{ old('postcode', $vaccancy->postcode) }}" />
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
                                                value="{{ old('pay_rate', $vaccancy->pay_rate) }}" />
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
                                                    placeholder="Home Manager" name="contact"
                                                    value="{{ old('contact', 'Home Manager') }}" />
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
                                                    value="{{ old('salary', $vaccancy->salary) }}" />
                                                @error('salary')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Job Description</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <textarea class="form-control form-control-solid" placeholder="Enter Job Description" name="description">{{ old('description', $vaccancy->description) }}</textarea>
                                            @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Responsibility</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <textarea class="form-control form-control-solid" placeholder="Enter responsibility" name="responsibility">{{ old('responsibility', $vaccancy->responsibility) }}</textarea>
                                            @error('responsibility')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Requirement</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify a target name for future usage and reference"></i>
                                            </label>
                                            <textarea class="form-control form-control-solid" placeholder="Enter Requirement" name="requirement">{{ old('requirement', $vaccancy->requirement) }}</textarea>
                                            @error('requirement')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="reset" data-bs-dismiss="modal"
                                                class="btn btn-light me-3">Cancel</button>
                                            <button type="submit" class="btn btn-primary">
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
        </div>
    </div>


    <script>
        function handleCheckboxChange(event) {
            var checkbox = event.target;
            var form = checkbox.closest('form');
            var formData = new FormData(form);

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
                    console.log('Success:', data);
                    var label = form.querySelector('.toggle-label');
                    label.textContent = data.is_listed ? 'Job is listed' : 'Job is not listed';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
        document.querySelectorAll('.toggle-checkbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', handleCheckboxChange);
        });
    </script>
@endsection
