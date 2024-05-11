@extends('admin.layouts.index')


@section('content')
    <div class="card mb-5 mb-xl-10">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
        </div>
        <div id="kt_account_settings_profile_details" class="collapse show">
            <form id="kt_account_profile_details_form" class="form" action="{{ route('update.user.profile.edit') }}"
                enctype="multipart/form-data" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url({{ asset('admin_assets/media/svg/avatars/blank.svg') }})">
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{ $user->avatar ? asset('storage/' . $user->avatar) : ($user->gender === 'male' ? asset('admin_assets/male_dummy.jpeg') : asset('admin_assets/female_dummy.webp')) }})">
                                </div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg, heic.</div>
                            @error('avatar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="fname"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="First name" value=" {{ old('fname', $user->fname) }}" />
                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="lname"
                                        class="form-control form-control-lg form-control-solid" placeholder="Last name"
                                        value="{{ old('lname', $user->lname) }}" />
                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company" class="form-control form-control-lg form-control-solid"
                                placeholder="Company name" value="{{ config('app.name') }}" />
                            @error('company')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Contact Phone</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Phone number must be active"></i>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input type="phone" name="phone" class="form-control form-control-lg form-control-solid"
                                placeholder="Phone number" value="{{ old('phone', $user->phone) }}" />
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                        <div class="col-lg-8 fv-row">
                            <input @disabled(true) type="text" name="website"
                                class="form-control form-control-lg form-control-solid" placeholder="Company website"
                                value="{{ config('app.url') }}" />
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Country of origination"></i>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select name="country" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Select a country..."
                                class="form-select form-select-solid form-select-lg fw-bold" disabled>

                                <option value="">Please choose</option>
                                @foreach (config('country') as $code => $name)
                                    <option value="{{ $name }}"
                                        {{ old('country') == $name || $user->country == $name ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach

                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </select>

                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Spoken Language(s)</label>
                        <div class="col-lg-8 fv-row">
                            <input type="name" name="languages"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter Spoken Languages" value="{{ old('languages', $user->languages) }}" />
                            @error('languages')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
