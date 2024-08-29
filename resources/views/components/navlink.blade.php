@props(['active' => false])

@php

    $link = strtolower($slot) === 'home' ? '/' : '/' . strtolower($slot);
    $request = strtolower($slot) === 'home' ? '/' : strtolower($slot);

@endphp

<a href="<?= $link ?>"
    class="{{ request()->is($request) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is($request) ? 'page' : 'false' }}">
    {{ $slot }}</a>
