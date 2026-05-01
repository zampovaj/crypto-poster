@props(['columnsText' => []])

@php
    $colCount = count($columnsText);
@endphp

<div class="list-columns cols-{{ $colCount }} subheading-sans">

    @foreach ($columnsText as $column)
        <ul>
            @foreach ($column as $row)
                <li class="{{ $row['sign'] }}">
                    <x-text-transformer :text="$row['text']" />
                </li>
            @endforeach
        </ul>
    @endforeach

</div>
