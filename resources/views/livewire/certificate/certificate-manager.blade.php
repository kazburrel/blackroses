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
                    wire:key='kaz'>
                    <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-50px">S/N</th>
                            <th class="min-w-200px">Certificate Id</th>
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-150px">Email</th>
                            <th class="min-w-150px">Issued Date</th>
                            <th class="min-w-150px">Expiry Date</th>
                            <th class="min-w-150px">File</th>
                            <th class="min-w-150px">Status</th>
                            <th class="min-w-150px">Renewed</th>
                            <th class="min-w-150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($certificates as $i => $certificate)
                            <tr wire:key='{{ $certificate->uuid }}'>
                                <td>
                                    <span class="text-dark fw-bolder  d-block fs-6">{{ $i + 1 }}</span>
                                </td>
                                <td>
                                    <span class="text-primary fw-bolder  d-block fs-6">{{ $certificate->uuid }}</span>
                                </td>
                                <td>

                                    <div class="d-flex justify-content-center flex-center">
                                        <span class="text-dark fw-bolder  d-block fs-6">
                                            {{ $certificate->name }}
                                        </span>
                                    </div>

                                </td>
                                <td>

                                    <div class="d-flex justify-content-center flex-center">
                                        <span class="text-dark fw-bolder  d-block fs-6">
                                            {{ $certificate->email }}
                                        </span>
                                    </div>

                                </td>
                                <td>
                                    <span
                                        class="text-dark fw-bolder  d-block fs-6">{{ date('F j, Y', strtotime($certificate->issued_date)) }}</span>
                                </td>

                                <td class="text-end">
                                    <div class="d-flex flex-center w-100 me-2">
                                        <span
                                            class="text-dark fw-bolder  d-block fs-6">{{ date('F j, Y', strtotime($certificate->expiry_date)) }}</span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex flex-center w-150 me-2">
                                        <span class="text-dark fw-bolder  d-block fs-6">
                                            <button wire:click="openDocument('{{ $certificate->uuid }}')"
                                                class="btn btn-link">View Certificate</button>
                                        </span>
                                    </div>
                                </td>


                                <td class="text-end">
                                    <div class="d-flex flex-center w-100 me-2">
                                        <span
                                            class="text-dark fw-bolder d-block fs-6 px-3 py-2 rounded {{ $certificate->status ? 'alert-success' : 'alert-danger' }}">
                                            {{ $certificate->status ? 'Active' : 'Expired' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="d-flex flex-center w-100 me-2">
                                        <span
                                            class="text-dark fw-bolder d-block fs-6 px-3 py-2 rounded {{ $certificate->is_renewed ? 'alert-success' : 'alert-danger' }}">
                                            {{ $certificate->is_renewed ? 'Yes' : 'No' }}
                                        </span>
                                    </div>
                                </td>

                                <td class="">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
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
                                        data-kt-menu="true" wire:ignore>

                                        @if (!$certificate->status)
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3 text-success"
                                                    data-kt-ecommerce-order-filter="approve_row">Renewed</a>
                                            </div>
                                        @endif
                                        <div class="menu-item px-3">
                                            <x-swal.confirm-delete title="Are you sure?"
                                                text="This will permanently delete the row." confirmButtonText="Delete"
                                                :uuid="$certificate->uuid">
                                                <span class="text-danger">Delete</span>
                                            </x-swal.confirm-delete>
                                        </div>
                                        <div class="menu-item px-3">
                                            <x-swal.toggle-notification title="Are you sure?"
                                                text="This will change your email notification settings."
                                                confirmButtonText="Toggle" :uuid="$certificate->uuid" :enabled="$certificate->stop_sending_mails">
                                                <span
                                                    class="text-info">{{ $certificate->stop_sending_mails ? 'Resume Email' : 'Stop Email' }}</span>
                                            </x-swal.toggle-notification>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
