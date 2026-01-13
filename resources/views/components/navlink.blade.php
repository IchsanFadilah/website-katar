@props(['href', 'current' => false])

@php
    $classes = $current ? 'bg-indigo-500 text-zinc-900 font-semibold hover:text-white' : 'text-white';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'p-2 items-center text-sm ease-in-out duration-200 rounded-lg hover:bg-indigo-700 ' . $classes]) }}>
    {{ $slot }}
</a>
