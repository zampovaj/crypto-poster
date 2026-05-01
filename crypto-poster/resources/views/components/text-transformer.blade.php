@props(['text'])

@php
    $text = str_replace(['=p=', '=a=', '[/]'], ['<span class="light-purple">', '<span class="accent">','</span>'], $text);
@endphp

<div>
    {!! $text !!}
</div>