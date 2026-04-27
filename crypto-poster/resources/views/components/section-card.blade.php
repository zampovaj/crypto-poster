@props(['title', 'text', 'size' => 'col-6'])

@php
    $text = str_replace(['==', '[/]'], ['<span class="purple">', '</span>'], $text);
@endphp

<div class="section-card {{ $size }}">
    <div class="heading-sans-purple-glow">
        {{ $title }}
    </div>
    
    <div class="separator"></div>

    <div class="text-mono">
        {!! $text !!}
    </div>

    <div class="content">
        {{ $slot }}
    </div>
</div>
