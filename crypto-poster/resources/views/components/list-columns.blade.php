@props(['columnsText' => []])

@php
    foreach ($columnsText as $columnIndex => $rows) {
        foreach ($rows as $rowIndex => $row) {
            $columnsText[$columnIndex][$rowIndex]['text'] = str_replace(
                ['=a=', '=p=', '[/]'],
                ['<span class="accent-glow">', '<span class="purple-glow">', '</span>'],
                $row['text'],
            );
        }
    }

    $colCount = count($columnsText);
@endphp

<div class="list-columns cols-{{ $colCount }} subheading-sans">

    @foreach ($columnsText as $column)
        <ul>
            @foreach ($column as $row)
                <li class="{{ $row['sign'] }}">{!! $row['text'] !!}</li>
            @endforeach
        </ul>
    @endforeach

</div>
