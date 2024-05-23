<div>
    <div>
        <div class="modal-header pb-1 border-0 justify-content-center bg-primary mb-5">
            <div class="text-center">
                <h1 class="mb-3 text-white">Add a Certificate</h1>
            </div>
        </div>
        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
            <form action="">
                <div wire:key='obi'>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Certificate Name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Enter Certificate Name" wire:model="name" value="{{ old('name') }}" />
                        <x-input.error key="name" />
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6">
                            <div class="fv-row">
                                <label for="" class="form-label required">Issued Date</label>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference"></i>
                                <input name="issued_date" wire:model='issued_date' type="date"
                                    class="form-control" />
                                <x-input.error key="issued_date" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fv-row">
                                <label for="" class="form-label required">Expiry Date</label>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference"></i>
                                <input name="expiry_date" wire:model='expiry_date' type="date"
                                    class="form-control" />
                                <x-input.error key="expiry_date" />
                            </div>
                        </div>

                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6">
                            <div class="fv-row">
                                <label for="" class="form-label required">Last Renewed Date</label>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference"></i>
                                <input name="last_renewed_date" wire:model='last_renewed_date' type="date"
                                    class="form-control" />
                                <x-input.error key="last_renewed_date" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="fv-row">
                            <label for="" class="form-label required">Certificate Document</label>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                title="Specify a target name for future usage and reference"></i>
                            <x-input.file name="file" wire:model='file' placeholder="Select PDF, PNG or JPEG files"
                                accept=".pdf,.png,.jpg,.jpeg" />
                            <x-input.error key="file" />
                        </div>
                    </div>
                </div>
            </form>


            <div class="d-flex justify-content-end mt-3">
                <button wire:click='submit' class="btn btn-success">
                    <span class="indicator-label">Submit</span>
                </button>
            </div>

        </div>
    </div>

</div>
