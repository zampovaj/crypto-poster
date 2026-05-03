@props(['rows' => []])

<div class="list-steps list-sans">
    <ul>
        @foreach ($rows as $row)
            <li>
                <x-text-transformer :text="$row" />
            </li>
        @endforeach
    </ul>
</div>