<span x-data="{
    select: null,
    input: null
}" wire:ignore wire:key="select-input-{{ $selectKey ?? Str::random(7) }}">
    <span>
        <style>
            .form-select {
                pointer-events: auto !important
            }
        </style>
        <select x-init="$($el).select2({
            placeholder: `{{ $placeholder ?? 'Select an Option' }}`,
            minimumResultsForSearch: @isset($search) null @else Infinity @endisset,
            multiple: @js(isset($multiple)),
            allowClear: @js(isset($clearable)),
            closeOnSelect: true,
            tags: @js(isset($tags)),
            @isset($parent)
                        @if (!empty($parent))
                            dropdownParent: $('#{{ $parent }}'),
                        @endif
                    @endisset
            @isset($templates)
                        templateSelection: optionFormat,
                        templateResult: optionFormat,
                    @endisset
        });
        
        $($el).on('change', (e) => {
            $refs.input.value = $(e.target).select2('val');
            $refs.input.dispatchEvent(new Event('input', {
                bubbles: true
            }));
        });"
            {{ $attributes->merge(['class' => 'form-select form-select-solid border'])->whereDoesntStartWith('wire:model') }}
            {{ $attributes }}>
            {{ $slot }}
        </select>

        <input type="text" {{ $attributes->whereStartsWith('wire:model') }} x-ref="input" hidden>
    </span>
</span>
