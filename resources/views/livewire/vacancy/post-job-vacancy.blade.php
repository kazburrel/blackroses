<div>
    <div class="modal-header pb-1 border-0 justify-content-center bg-primary mb-5">
        <div class="text-center">
            <h1 class="mb-3 text-white">Post a Job Vacancy</h1>
        </div>
    </div>
    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
        <h6 class="text-center">Step {{ $current_step }} out of {{ $total_step }}</h6>

        @if ($current_step == 1)
            <div wire:key='obi'>
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Job Title</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Specify a target name for future usage and reference"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Job Title"
                        wire:model="title" value="{{ old('title') }}" />
                    <x-input.error key="title" />
                </div>
                <div class="row g-9 mb-8">
                    <div class="col-md-6">
                        <div class="fv-row">
                            <label for="" class="form-label">Select Job Type</label>
                            <x-input.select parent="kt_modal_new_target" wire:model="type" name="type" multiple>
                                <option value="">Select type...</option>
                                <option value="Full-time"
                                    {{ in_array('Full-time', old('type', [])) ? 'selected' : '' }}>
                                    Full-time</option>
                                <option value="Part-time"
                                    {{ in_array('Part-time', old('type', [])) ? 'selected' : '' }}>
                                    Part-time</option>
                                <option value="Zero hours contract"
                                    {{ in_array('Zero hours contract', old('type', [])) ? 'selected' : '' }}>Zero hours
                                    contract</option>
                                <option value="Permanent"
                                    {{ in_array('Permanent', old('type', [])) ? 'selected' : '' }}>
                                    Permanent</option>
                            </x-input.select>
                            <x-input.error key="type" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fv-row">
                            <label for="" class="form-label">Due Date</label>
                            <input name="due_date" wire:model='due_date' type="date" class="form-control" />
                            <x-input.error key="due_date" />
                        </div>
                    </div>
                </div>
                <div class="row g-9 mb-8">
                    <div class="col-md-6">
                        <div class="fv-row">
                            <label for="" class="form-label">Select Job Schedule</label>
                            <x-input.select wire:model='schedule' name="schedule" multiple>
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
                            </x-input.select>
                            <x-input.error key="schedule" />
                        </div>
                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Job Benefits</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Job Benefits"
                            wire:model="benefits" value="{{ old('benefits') }}" />
                        <x-input.error key="benefits" />
                    </div>
                </div>
            </div>
        @endif
        @if ($current_step == 2)
            <div wire:key='toni'>
                <div class="row g-9 mb-8">
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Job Location</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Job Location"
                            wire:model="location" value="{{ old('location') }}" />
                        <x-input.error key="location" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Job Postcode</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Job Postcode"
                            wire:model="postcode" value="{{ old('postcode') }}" />
                        <x-input.error key="postcode" />
                    </div>
                </div>
                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Job Pay Rate</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="Specify a target name for future usage and reference"></i>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Job Pay Rate"
                        wire:model="pay_rate" value="{{ old('pay_rate') }}" />
                    <x-input.error key="pay_rate" />
                </div>
                <div class="row g-9 mb-8">
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Contact</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Home Manager"
                            wire:model="contact" value="Home Manager" />
                        <x-input.error key="contact" />
                    </div>
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Salary</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Salary"
                            wire:model="salary" value="{{ old('salary') }}" />
                        <x-input.error key="salary" />
                    </div>
                </div>
            </div>
        @endif
        @if ($current_step == 3)
            <div wire:key='obi2'>
                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">Job Description</label>
                    <textarea id="description" class="form-control form-control-solid" rows="3" wire:model="description" disabled
                        placeholder="Please visit the application page to view the complete description">{{ 'Please visit the application page to view the complete description' }}</textarea>
                    <x-input.error key="description" />
                </div>
                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">Responsibility</label>
                    <textarea id="responsibility" class="form-control form-control-solid" rows="3" wire:model="responsibility"
                        disabled placeholder="Please visit the application page to view the complete responsibilities.">{{ 'Please visit the application page to view the complete responsibilities.' }}</textarea>
                    <x-input.error key="responsibility" />
                </div>
                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-bold mb-2">Requirements</label>
                    <textarea id="requirements" class="form-control form-control-solid" rows="3" wire:model="requirement" disabled
                        placeholder="Please visit the application page to view the complete requirements.">{{ 'Please visit the application page to view the complete requirements.' }}</textarea>
                    <x-input.error key="requirement" />
                </div>
            </div>
        @endif
        <div class="d-flex justify-content-between">
            @if ($current_step > 1)
                <div>
                    <button wire:click='decreaseStep' class="btn btn-primary">
                        <span class="indicator-label">Previous</span>
                    </button>
                </div>
            @endif
            @if ($current_step == 1)
                <div class="ms-auto">
                    <button wire:click='increaseStep' class="btn btn-primary">
                        <span class="indicator-label">Next</span>
                    </button>
                </div>
            @endif
            @if ($current_step > 1 && $current_step < $total_step)
                <div>
                    <button wire:click='increaseStep' class="btn btn-primary">
                        <span class="indicator-label">Next</span>
                    </button>
                </div>
            @endif
            @if ($current_step == $total_step)
                <div>
                    <button wire:click='submit' class="btn btn-success">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
            @endif
        </div>



    </div>
</div>
