@props(['title', 'text', 'confirmButtonText', 'uuid'])

<script>
    function confirmDelet(event, title, text, confirmButtonText, uuid) {
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
                Livewire.dispatch('deleteConfirmed', {
                    uuid: uuid
                });
            }
        });
    }
</script>

<div>
    <a href="#" class="menu-link px-3"
        onclick="confirmDelet(event, '{{ $title }}', '{{ $text }}', '{{ $confirmButtonText }}', '{{ $uuid }}')">
        {{ $slot }}
    </a>
</div>
