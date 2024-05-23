@error($key)
    <p {{ $attributes->merge(['class' => 'text-danger fs-6']) }}>{{ $message }}</p>
@enderror
