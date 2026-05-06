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
        'Kryptografie se nepoužívá jen pro šifrování, ale i pro =p=ověření identity[/] a =p=neporušenosti dat[/].
        K tomu slouží =p=digitální podpisy[/] založené na asymetrické kryptografii.
        Odesílatel vytvoří otisk dat (=p=hash[/]) a podepíše ho svým =p=soukromým klíčem[/].
        Příjemce podpis ověří pomocí =p=veřejného klíče[/] a porovná ho s vlastním hashem.
        Shoda znamená, že data nebyla změněna a skutečně pochází od odesílatele.';
    $httpsText =
        'Stejný princip se používá i při =a=HTTPS[/]:
        server se prokazuje =a=podepsaným certifikátem[/] a klient si ověřuje jeho pravost,
        než naváže důvěrné spojení.';

    $rsaText = '=p=Nejznámější asymetrický algoritmus.[/]
        =glue=Stejně jako[/] ostatní staví na tom, že je =p=snadné[/] matematickou operaci =p=provést[/],
        ale téměř =p=nemožné[/] ji =p=zvrátit[/].
        U RSA je to násobení velkých prvočísel vs. jejich zpětný rozklad (=p=faktorizace=p=).';
    
    $rsaSteps = [
        'Zvolí se dvě tajná velká =glue=prvočísla \(p\) a \(q\)[/]',
        'Spočítá se veřejný modul \(n = p \cdot q\)',
        'Určí se řád grupy \(\lambda(n) = \text{lcm}(p-1, q-1)\)',
        'Zvolí se veřejný exponent \(e\) a vypočítá soukromý =glue=klíč \(d\):\(d \equiv e^{-1} \pmod{\lambda(n)}\)[/]',
        'Šifrování: Zpráva \(M\) se šifruje veřejným =glue=klíčem \((n, e)\): \(C = M^e \pmod n\)[/]',
        'Dešifrování: Šifra \(C\) se dešifruje soukromým klíčem \(d\): \(M = C^d \pmod n\)',
    ];

    $dhkeText = 'Dvě strany si dokážou vytvořit =p=stejné tajemství[/], aniž by si ho kdy poslaly.
        Toto umožňuje protokol =p=Diffie&#8209;Hellman[/] založený na =p=asymetrické kryptografii[/].';

    $pqcText = 'Dnešní šifry stačí na běžné počítače,
        ale dostatečně výkonné =p=kvantové počítače[/] je =p=prolomí[/] nebo kriticky oslabí.
        =p=Post=-=kvantová kryptografie[/] proto hledá algoritmy, které zůstanou =p=bezpečné v budoucnosti[/].';

    $eccText='ECC využívá matematiku =p=eliptických křivek[/] nad konečnými tělesy.
        Dosahuje tak stejné bezpečnosti jako klasické asymetrické algortimy, ale s použitím =p=menších klíčů[/].'

@endphp

<x-layouts.app>
    <div class>
        <div class="poster__header">
            <div class="poster__title heading-mono--purple-glow">
                Jak funguje kryp<span style="margin-left: -0.4cm;">t</span>ogra<span style="margin-left: 0.2cm;">f</span><span style="margin-left: -0.4cm;">i</span>e?
            </div>

            <div class="poster__subtitle text-mono">
                Jak matematika zajišťuje bezpečnost moderního digitálního světa.
            </div>
        </div>

        <div class="poster__content">

            {{-- asymmetric vs Symmetric --}}

            <x-section-card title="Symetrická vs asymetrická" :text="$asymVsSymText" size="col-8">

                <x-diagrams.sym-vs-asym />
                <x-list-columns :columnsText="$asymVsSymCols" />

            </x-section-card>

            {{-- signatures, https --}}

            <x-section-card title="Digitální podpisy a HTTPS" :text="$signaturesText" size="col-10">

                <div class="text-mono https-card__intro">
                    <x-text-transformer :text="$httpsText" />
                </div>
                
                <x-diagrams.https />

            </x-section-card>

            {{-- rsa --}}

            <x-section-card title="RSA" :text="$rsaText" size="col-6">

                <x-list-steps :rows="$rsaSteps" />

            </x-section-card>

            {{-- dhke --}}

            <x-section-card title="Diffie-Hellmanova výměna klíče" text="" size="col-10">
            
                <div class="dhke-card__content">
                    <div class="dhke-card__diagram">
                        <x-diagrams.diffie-hellman />
                    </div>

                    <div class="dhke-card__text text-mono">
                        <x-text-transformer :text="$dhkeText" />
                    </div>
                </div>
                
            </x-section-card>

            {{-- pqc --}}

            <x-section-card title="PQC" :text="$pqcText" size="col-6">

                <div class="pqc-card__diagram">
                    <x-diagrams.quantum />
                </div>

            </x-section-card>

            {{-- ecc --}}

            <x-section-card title="Eliptické křivky" :text="$eccText" size="col-8">

                <div>
                    <div class="ecc-card__geometry-diagram">
                        <x-diagrams.curve-geometry />
                    </div>
                    {{-- <x-diagrams.curve-comparison /> --}}
                </div>
                
            </x-section-card>

        </div>
    </div>
</x-layouts.app>
