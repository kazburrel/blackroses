<span x-data="{
    select: null
}" wire:ignore wire:key="select-input-{{ $selectKey ?? Str::random(7) }}">
    <span>
        <style>
            .form-select {
                pointer-events: auto !important
            }
        </style>
        <select x-data="{
            init() {
                $($el).select2({
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
                    for (const name of e.target.getAttributeNames()) {
                        if (name.includes('wire:model')) {
                            $wire.set(e.target.getAttribute(name), $(e.target).select2('val'));
                        }
                    }
                });
            }
        }" x-init="init()"
            {{ $attributes->merge(['class' => 'form-select form-select-solid border']) }} {{ $attributes }}>
            {{ $slot }}
        </select>
    </span>
</span>
