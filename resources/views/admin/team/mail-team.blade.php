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
                            <div>
                                <form action="{{ route('send.staff.mail') }}" method="POST" id="kt_inbox_reply_form"
                                    class="rounded border mt-10">
                                    @csrf
                                    <input type="hidden" name="attachment_ids[]" value="">
                                    <div class="d-block">

                                        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">

                                            <div class="text-dark fw-bolder w-75px">To:</div>

                                            <input type="text" class="form-control border-0" name="compose_to"
                                                value="" data-kt-inbox-form="tagify"
                                                data-staff-users="{{ json_encode($staffUsers) }}" name="to" />
                                            @if ($errors->has('compose_to'))
                                                <div class="text-danger">{{ $errors->first('compose_to') }}</div>
                                            @endif

                                            <div class="ms-auto w-75px text-end">
                                                <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2"
                                                    data-kt-inbox-form="cc_button">Cc</span>
                                                <span class="text-muted fs-bold cursor-pointer text-hover-primary"
                                                    data-kt-inbox-form="bcc_button">Bcc</span>
                                            </div>

                                        </div>

                                        <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px"
                                            data-kt-inbox-form="cc">

                                            <div class="text-dark fw-bolder w-75px">Cc:</div>

                                            <input type="text" class="form-control border-0" name="compose_cc"
                                                value="" data-kt-inbox-form="tagify" name="cc" />
                                            @if ($errors->has('compose_cc'))
                                                <div class="text-danger">{{ $errors->first('compose_cc') }}</div>
                                            @endif

                                            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                                                <i class="la la-close"></i>
                                            </span>

                                        </div>

                                        <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px"
                                            data-kt-inbox-form="bcc">

                                            <div class="text-dark fw-bolder w-75px">Bcc:</div>

                                            <input type="text" class="form-control border-0" name="compose_bcc"
                                                value="" data-kt-inbox-form="tagify" name="bcc" />
                                            @if ($errors->has('compose_bcc'))
                                                <div class="text-danger">{{ $errors->first('compose_bcc') }}</div>
                                            @endif

                                            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                                                <i class="la la-close"></i>
                                            </span>

                                        </div>

                                        <div class="border-bottom">
                                            <input class="form-control border-0 px-8 min-h-45px" name="compose_subject"
                                                placeholder="Subject" name="subject" />
                                            @if ($errors->has('compose_subject'))
                                                <div class="text-danger">{{ $errors->first('compose_subject') }}</div>
                                            @endif
                                        </div>

                                        <div id="kt_inbox_form_editor" class="form-control border-0 h-250px px-3"
                                            name="body">
                                            <p></p>
                                        </div>
                                        <script>
                                            document.querySelector('form#kt_inbox_reply_form').addEventListener('submit', function() {
                                                var editorContent = Array.from(document.querySelectorAll('#kt_inbox_form_editor p'))
                                                    .map(p => p.innerText)
                                                    .join('\n');
                                                var hiddenInput = document.createElement('input');
                                                hiddenInput.type = 'hidden';
                                                hiddenInput.name = 'body';
                                                hiddenInput.value = editorContent;
                                                this.appendChild(hiddenInput);
                                            });
                                        </script>
                                        @if ($errors->has('body'))
                                            <div class="text-danger px-8">{{ $errors->first('body') }}</div>
                                        @endif
                                        <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments"
                                            data-kt-inbox-form="dropzone">
                                            <div class="dropzone-items">
                                                <div class="dropzone-item" style="display:none">

                                                    <div class="dropzone-file">
                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                                            <strong>(
                                                                <span data-dz-size="">340kb</span>)</strong>
                                                        </div>
                                                        <div class="dropzone-error" data-dz-errormessage=""></div>
                                                    </div>

                                                    <div class="dropzone-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                                data-dz-uploadprogress=""></div>
                                                        </div>
                                                    </div>

                                                    <div class="dropzone-toolbar">
                                                        <span class="dropzone-delete" data-dz-remove="">
                                                            <i class="bi bi-x fs-1"></i>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">

                                        <div class="d-flex align-items-center me-3">

                                            <div class="btn-group me-4">
                                                <button type="submit" class="btn btn-md btn-primary fs-bold px-6"
                                                    data-kt-inbox-form="send">
                                                    <span class="indicator-label">Send</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2"
                                                id="kt_inbox_reply_attachments_select"
                                                data-kt-inbox-form="dropzone_upload">

                                                <span class="svg-icon svg-icon-2 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M4.425 20.525C2.525 18.625 2.525 15.525 4.425 13.525L14.825 3.125C16.325 1.625 18.825 1.625 20.425 3.125C20.825 3.525 20.825 4.12502 20.425 4.52502C20.025 4.92502 19.425 4.92502 19.025 4.52502C18.225 3.72502 17.025 3.72502 16.225 4.52502L5.82499 14.925C4.62499 16.125 4.62499 17.925 5.82499 19.125C7.02499 20.325 8.82501 20.325 10.025 19.125L18.425 10.725C18.825 10.325 19.425 10.325 19.825 10.725C20.225 11.125 20.225 11.725 19.825 12.125L11.425 20.525C9.525 22.425 6.425 22.425 4.425 20.525Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M9.32499 15.625C8.12499 14.425 8.12499 12.625 9.32499 11.425L14.225 6.52498C14.625 6.12498 15.225 6.12498 15.625 6.52498C16.025 6.92498 16.025 7.525 15.625 7.925L10.725 12.8249C10.325 13.2249 10.325 13.8249 10.725 14.2249C11.125 14.6249 11.725 14.6249 12.125 14.2249L19.125 7.22493C19.525 6.82493 19.725 6.425 19.725 5.925C19.725 5.325 19.525 4.825 19.125 4.425C18.725 4.025 18.725 3.42498 19.125 3.02498C19.525 2.62498 20.125 2.62498 20.525 3.02498C21.325 3.82498 21.725 4.825 21.725 5.925C21.725 6.925 21.325 7.82498 20.525 8.52498L13.525 15.525C12.325 16.725 10.525 16.725 9.32499 15.625Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
