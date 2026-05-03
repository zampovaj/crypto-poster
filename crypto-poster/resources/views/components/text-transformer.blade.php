@props(['text'])

@php
    $text = htmlspecialchars_decode($text);
    $text = str_replace(
        ['=p=', '=a=', '=glue=', '[/]'],
        ['<span class="light-purple">', '<span class="accent">', '<span style="white-space: nowrap;">', '</span>'],
        $text);
@endphp

<div>
    {!! $text !!}
</div>