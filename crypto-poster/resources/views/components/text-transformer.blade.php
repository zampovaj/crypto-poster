@props(['text'])

@php
    $text = htmlspecialchars_decode($text);
    $text = str_replace(
        ['=p=', '=a=', '=glue=', '[/]', '=-='],
        ['<span class="light-purple">', '<span class="accent">', '<span class="whitespace-nowrap">', '</span>', '<span>&#8209;</span>'],
        $text);
@endphp

<div>
    {!! $text !!}
</div>