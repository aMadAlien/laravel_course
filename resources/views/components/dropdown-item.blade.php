@props(['active' => false])

@php

$classes = "block text-left px-3 pt-2 text-sm leading-6";

if ($active) $classes = 'bg-blue-500 text-white';

@endphp


<a {{ $attributes(["class" => $classes]) }}>{{ $slot }}</a>