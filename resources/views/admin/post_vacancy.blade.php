@extends('admin.layouts.index')

@section('content')
    <div class=" " id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <livewire:vacancy.post-job-vacancy />
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("description").value =
                "Please visit the application page to view the complete description";
            document.getElementById("responsibility").value =
                "Please visit the application page to view the complete responsibility";
            document.getElementById("requirements").value =
                "Please visit the application page to view the complete requirement";
        });
    </script>
@endsection
