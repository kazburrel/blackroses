<div>
    <div class="mb-18">
        <div class="text-center mb-17">
            <h3 class="fs-2hx text-dark mb-5">Our Great Team</h3>
            <div class="fs-5 text-muted fw-bold">A collective of passionate individuals dedicated to
                delivering exceptional service and making a positive impact every step of the way.
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
            @forelse ($teamMembers as $member)
                <div class="col text-center mb-9">

                    <div class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                        @if ($member->image == 'images/resource/latoya_main.jpeg') style="background-image:url('{{ asset($member->image) }}')"
                        @else
                            style="background-image:url('{{ asset('storage/' . $member->image) }}')" @endif>
                    </div>

                    <div class="mb-0">
                        <a href="../../demo1/dist/pages/user-profile/projects.html"
                            class="text-dark fw-bolder text-hover-primary fs-3">{{ $member->fullname }}</a>
                        <div class="text-muted fs-6 fw-bold">{{ $member->position }}</div>
                    </div>
                    <div>
                        <p>{{ Str::limit($member->write_up, 100) }}</p>
                    </div>
                    <div class="d-flex justify-content-center flex-shrink-0">
                        <div class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                            data-bs-toggle="modal" data-bs-target="#kt_modal_add_user-{{ $member->uuid }}">
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
                        {{-- <a href="#" class="btn btn-icon btn-bg-light btn-sm" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_delete{{ $member->uuid }}"
                            data-kt-users-table-filter="delete_trigger">
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
                        </a> --}}

                        <a href="#" class="btn btn-icon btn-bg-light btn-sm"
                            onclick="confirmDelete(event, '{{ $member->uuid }}')">
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
                {{-- <div class="modal fade" id="kt_modal_add_user-{{ $member->uuid }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content rounded">
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                <form wire:submit.prevent="addTeamMember">
                                    @csrf
                                    <div class="mb-13 text-center">
                                        <h1 class="mb-3">Update Team Member</h1>
                                    </div>
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Full Name</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Enter Staff Fullname" wire:model="fullname"
                                            value="{{ old('fullname', $member->fullname) }}" />
                                        @error('fullname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row g-9 mb-8">
                                        <div class="col-md-6 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Staff Image</span>
                                            </label>
                                            <input type="file" class="form-control form-control-solid"
                                                placeholder="Enter Job image" wire:model="image"
                                                value="{{ old('image') }}" />
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 fv-row">
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Staff Position</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Staff Position" wire:model="position"
                                                value="{{ old('position', $member->position) }}" />
                                            @error('position')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-bold mb-2">About Staff</label>
                                        <textarea class="form-control form-control-solid" rows="3" wire:model="write_up"
                                            placeholder="Please give a small write up about staff">{{ $member->write_up }}</textarea>
                                        @error('write_up')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="reset" data-bs-dismiss="modal"
                                            id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
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
                </div> --}}
                <div class="modal fade kt_modal_delete_modal" id="kt_modal_delete_{{ $member->uuid }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>Are you sure you want to delete this member?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger"
                                    wire:click="deleteMember('{{ $member->uuid }}')">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>

</div>
