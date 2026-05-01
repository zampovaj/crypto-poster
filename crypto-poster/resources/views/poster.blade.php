@php
    $asymVsSymText =
        '=p=Symetrická[/] kryptografie používá =p=stejný klíč[/] pro šifrování i dešifrování, zatímco =p=asymetrická[/] kryptografie využívá pár klíčů - =p=veřejný[/] a =p=soukromý[/]. Symetrická je =p=rychlejší[/], ale vyžaduje předem sdílený klíč, zatímco asymetrická umožňuje =p=bezpečnou komunikaci[/], ale je =p=pomalejší[/].';
    $asymVsSymCols = [
        [
            ['text' => 'jeden =a=sdílený klíč[/] pro obě operace', 'sign' => 'none-accent'],
            ['text' => 'velmi =a=rychlá[/] (např. =p=AES[/])', 'sign' => 'plus'],
            ['text' => 'používá se pro =a=samotná data[/]', 'sign' => 'plus'],
            ['text' => 'nutnost =a=předem sdíleného klíče[/]', 'sign' => 'minus'],
        ],
        [
            ['text' => '=p=dvojice klíčů[/] (veřejný / soukromý)', 'sign' => 'none-purple'],
            ['text' => 'výrazně =p=pomalejší[/] (=a=RSA, ECC[/])', 'sign' => 'minus'],
            ['text' => 'umožňuje =p=bezpečnou výměnu klíče[/]', 'sign' => 'plus'],
            ['text' => 'používá se především na =p=začátku komunikace[/]', 'sign' => 'none-purple'],
        ],
    ];

    $signaturesText =
        'Kryptografie se nevyužívá jen pro šifrování. Často je potřeba prokázat =p=identitu odesílatele[/] nebo =p=neporušenost zprávy[/]. K tomu slouží =p=digitální podpisy[/] založené na asymetrické kryptografii. Odesílatel vytvoří otisk dat (=p=hash[/]), který zašifruje svým =p=soukromým klíčem[/]. Příjemce pak tento podpis dešifruje =p=veřejným klíčem[/] odesílatele a výsledek porovná s vlastním hashem dat. Pokud se shodují, data nikdo nezměnil a skutečně pochází od daného odesílatele.';
    $httpsText =
        'Na tomto principu stojí =a=bezpečné připojení k internetu[/]. Protokol =a=HTTPS[/], který se dnes využívá pro téměř veškerou internetovou komunikaci, funguje díky protokolu =a=SSL/TLS[/]. Každý server musí mít =a=digitálně podepsaný certifikát[/] ověřený příslušnou autoritou, kterým prokazuje svoji identitu. Po ověření identity serveru (tzv. =a=handshake[/]) vytvoří klient se serverem =a=sdílený klíč[/], kterým =a=šifrují všechna přenášená data[/].';

@endphp

<x-layouts.app>
    <div>
        <div class="poster__header">
            <div class="poster__title heading-mono--purple-glow">
                Jak funguje kryptografie?
            </div>

            <div class="poster__subtitle text-mono">
                Jak matematika zajišťuje bezpečnost moderního digitálního světa.
            </div>
        </div>

        <div class="poster__content">

            <x-section-card title="Symetrická vs asymetrická kryptografie" :text="$asymVsSymText" size="col-10">

                <x-diagrams.sym-vs-asym />
                <x-list-columns :columnsText="$asymVsSymCols" />

            </x-section-card>

            <x-section-card title="Digitální podpisy a HTTPS" :text="$signaturesText" size="col-8">

                <x-diagrams.https />

                <div class="text-mono">
                    <x-text-transformer :text="$httpsText" />
                </div>
            </x-section-card>

        </div>
    </div>
</x-layouts.app>
