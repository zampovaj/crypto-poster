@php
    $asymVsSymText =
        '==Symetrická[/] kryptografie používá ==stejný klíč[/] pro šifrování i dešifrování, zatímco ==asymetrická[/] kryptografie využívá pár klíčů - ==veřejný[/] a ==soukromý[/]. Symetrická je ==rychlejší[/], ale vyžaduje předem sdílený klíč, zatímco asymetrická umožňuje ==bezpečnou komunikaci[/], ale je ==pomalejší[/].';
    $asymVsSymCols = [
        [
            ['text' => 'jeden =a=sdílený klíč[/] pro obě operace', 'sign' => 'none'],
            ['text' => 'velmi rychlá (např. AES)', 'sign' => 'plus'],
            ['text' => 'používá se pro samotná data', 'sign' => 'plus'],
            ['text' => 'nutnost klíč předem bezpečně předat', 'sign' => 'minus'],
        ],
        [
            ['text' => '=p=dvojice klíčů[/] (veřejný / soukromý)', 'sign' => 'none'],
            ['text' => 'výrazně pomalejší (RSA, ECC)', 'sign' => 'minus'],
            ['text' => 'umožňuje bezpečnou výměnu klíče', 'sign' => 'plus'],
            ['text' => 'používá se jen na začátku komunikace', 'sign' => 'none'],
        ],
    ];
@endphp

<x-layouts.app>
    <div>
        <div class="poster--header">
            <div class="poster--header__title heading-mono-purple-glow">
                Jak funguje kryptografie?
            </div>

            <div class="poster--header__subtitle text-sans">
                Jak matematika zajišťuje bezpečnost moderního digitálního světa.
            </div>
        </div>

        <div class="poster--content">

            <x-section-card title="Symetrická vs asymetrická" :text="$asymVsSymText" size="col-12">

                <x-diagrams.sym-vs-asym />

                <x-list-columns :columnsText="$asymVsSymCols" />

            </x-section-card>



        </div>
    </div>
</x-layouts.app>
