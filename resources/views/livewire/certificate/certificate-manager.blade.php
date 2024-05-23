<div>
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Certificates for {{ config('app.name') }}</span>
                <span class="text-muted fs-6"> Manage all the company certificates here.</span>
            </h3>
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" data-kt-ecommerce-order-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Search Application" />
            </div>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">

                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 text-center"
                    id="kt_ecommerce_sales_table">
                    <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-50px">S/N</th>
                            <th class="min-w-200px">Certificate Id</th>
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-100px">Issued Date</th>
                            <th class="min-w-100px">Expiry Date</th>
                            <th class="min-w-150px">Last Renewed Date</th>
                            <th class="min-w-100px">File</th>
                            <th class="min-w-150px">Status</th>
                            <th class="min-w-150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($applications as $i => $application) --}}
                        <tr>
                            <td>
                                <span class="text-dark fw-bolder  d-block fs-6"></span>
                            </td>
                            <td>
                                <span class="text-primary fw-bolder  d-block fs-6"></span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="justify-content-start flex-center">
                                        <span class="text-dark fw-bolder  d-block fs-6">
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block fs-6"></span>
                            </td>

                            <td class="text-end">
                                <div class="d-flex flex-center w-100 me-2">
                                    <span class="text-dark fw-bolder  d-block fs-6"></span>
                                </div>
                            </td>

                            <td class="text-end">
                                <div class="d-flex flex-center w-150 me-2">
                                    <span class="text-dark fw-bolder  d-block fs-6"></span>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="d-flex flex-center w-100 me-2">
                                    <span class="text-dark fw-bolder  d-block fs-6"><a href=""
                                            target="_blank">View Cert</a></span>
                                </div>
                            </td>


                            <td class="text-end">
                                <div class="d-flex flex-center w-100 me-2">
                                    {{-- <span
                                        class="text-dark fw-bolder  d-block fs-6 px-3 py-2 rounded {{ $application->is_approved ? 'alert-success' : ($application->is_rejected ? 'alert-danger' : 'alert-warning') }}">
                                        {{ $application->is_approved ? 'Interview Stage' : ($application->is_rejected ? 'Rejected' : 'Pending') }}
                                    </span> --}}
                                </div>
                            </td>
                            <td class="">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 text-success"
                                            data-kt-ecommerce-order-filter="approve_row">Approve</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 text-danger"
                                            data-kt-ecommerce-order-filter="reject_row">Reject</a>
                                    </div>


                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-ecommerce-order-filter="delete_row">Delete</a>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- @empty
                        @endforelse --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
