<div>
    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
        <form wire:submit.prevent="editTeamMember">
            @csrf
            <div class="mb-13 text-center">
                <h1 class="mb-3">Update Team Member</h1>
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Full Name</span>
                </label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Staff Fullname"
                    wire:model="fullname" value="{{ old('fullname') }}" />
                @error('fullname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row g-9 mb-8">
                <div class="col-md-6 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Staff Image</span>
                    </label>
                    <input type="file" class="form-control form-control-solid" placeholder="Enter Staff image"
                        wire:model="image" value="{{ old('image') }}" />
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Staff Position</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Enter Staff Position"
                        wire:model="position" value="{{ old('position') }}" />
                    @error('position')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="d-flex flex-column mb-8">
                <label class="fs-6 fw-bold mb-2">About Staff</label>
                <textarea class="form-control form-control-solid" rows="3" wire:model="write_up"
                    placeholder="Please give a small write up about staff"></textarea>
                @error('write_up')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="reset" data-bs-dismiss="modal" id="kt_modal_new_target_cancel"
                    class="btn btn-light me-3">Cancel</button>
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Update</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </form>
    </div>
</div>
