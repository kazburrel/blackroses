@extends('admin.layouts.index')

@section('content')
    <div class=" " id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <livewire:certificate.add-certificate />
            </div>
        </div>
    </div>
    <livewire:certificate.certificate-manager />
@endsection
