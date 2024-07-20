@props(['title', 'text', 'confirmButtonText', 'uuid', 'enabled'])

<script>
    function confirmToggle(event, title, text, confirmButtonText, uuid, enabled) {
        event.preventDefault();
        Swal.fire({
            title: title,
            text: text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirmButtonText
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('toggleNotification', {
                    uuid: uuid,
                    enabled: enabled
                });
            }
        });
    }
</script>

<div>
    <a href="#" class="menu-link px-3"
        onclick="confirmToggle(event, '{{ $title }}', '{{ $text }}', '{{ $confirmButtonText }}', '{{ $uuid }}', '{{ $enabled }}')">
        {{ $slot }}
    </a>
</div>
