@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-500 text-md mt-5 border border-red-500 w-fit px-4 py-2 rounded-md']) }}>
        {{ $message }}</p>
@enderror
