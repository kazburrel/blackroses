<input class="form-control form-control-solid" placeholder="{{ $placeholder ?? 'Pick a date' }}"
    id="{{ $id }}" />
<script>
    $("{{ $id }}").flatpickr();
</script>
