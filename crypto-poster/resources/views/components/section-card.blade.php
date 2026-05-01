@props(['title', 'text', 'size' => 'col-6'])

<div class="section-card {{ $size }}">
    <div class="section-card__title heading-sans--purple-glow">
        {{ $title }}
    </div>
    
    <div class="section-card__separator"></div>

    <div class="text-mono">
        <x-text-transformer :text="$text" />
    </div>

    <div class="content">
        {{ $slot }}
    </div>
</div>
