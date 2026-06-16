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

    $signaturesText = 'Kryptografie se nepoužívá jen pro šifrování, ale i pro =p=ověření identity[/] a =p=neporušenosti dat[/].
        K tomu slouží =p=digitální podpisy[/] založené na asymetrické kryptografii.
        Odesílatel vytvoří otisk dat (=p=hash[/]) a podepíše ho svým =p=soukromým klíčem[/].
        Příjemce podpis ověří pomocí =p=veřejného klíče[/] a porovná ho s vlastním hashem.
        Shoda znamená, že data nebyla změněna a skutečně pochází od odesílatele.';
    $httpsText = 'Stejný princip se používá i při =a=HTTPS[/]:
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

    $dhkeText =
        'Díky =p=asymetrické kryptografii[/] jsou dvě strany schopny vytvořit =p=sdílené tajemství[/], aniž by si ho kdy poslaly. Nejvyužívanější metodou je<br>=p=Diffie-Hellmanův algoritmus[/] využívaný k&nbsp;vytvoření =p=symetrického šifrovacího klíče[/]. Po síti putují pouze veřejná data, z nichž je pro útočníka odposlouchávajícího komunikaci matematicky nemožné klíč vypočítat.';

    $hashText = 'Hashovací funkce je matematický algoritmus, který převede libovolná data na unikátní řetězec fixní délky. Pro moderní kryptografii jsou klíčové tyto vlastnosti:
        =glue=• =p=Jednosměrnost[/]: Z hashe nelze získat původní data.[/]
        =glue=• =p=Kolizní odolnost[/]: Je nemožné najít dva různé vstupy se stejným hashem.[/]
        =glue=• =p=Lavinový efekt[/]: I změna jednoho bitu na vstupu kompletně změní celý výstup.[/]';

    $blockchainText =
        '=p=Blockchain[/] je decentralizovaná databáze, jejíž historii =p=nelze zpětně zfalšovat[/]. Každý blok v řetězci obsahuje transakční data a =p=hash předchozího bloku[/]. Pokud by útočník změnil data v jediném bloku, změní se i jeho hash, což okamžitě =p=zneplatní všechny následující bloky[/]. Tato technologie tvoří absolutní základ kryptoměn jako =p=Bitcoin[/] nebo =p=Ethereum[/] a k dosažení bezpečné shody bez centrální autority využívá algoritmy typu =p=Proof of Work[/].';

    $zkpText =
        'Matematický koncept =p=Zero-Knowledge Proofs[/] (ZKP - Důkazy s nulovou znalostí) umožňuje prokazateli přesvědčit ověřovatele o pravdivosti tvrzení bez odhalení jakékoli dodatečné informace – např. znalosti hesla, =p=aniž byste mu ho prozradili[/]. Původně interaktivní protokoly byly nahrazeny neinteraktivními (NIZK) verzemi, kdy prokazatel generuje a odesílá jeden matematický důkaz. Technologie je dnes naprosto klíčová pro =p=absolutní soukromí[/] a pro =p=škálování blockchainových sítí[/] (tzv. ZK-Rollups) komprimací tisíců transakcí do jediného důkazu. V praxi se používají dvě hlavní kategorie:';

    $zkpCols = [
        [
            ['text' => '=p=zk-SNARK[/] (Succinct Non-interactive)', 'sign' => 'none-purple'],
            ['text' => 'velmi =p=malé[/] důkazy, rychlé ověření', 'sign' => 'plus'],
            ['text' => 'vyžaduje =p=důvěryhodné nastavení[/]', 'sign' => 'minus'],
            ['text' => 'není odolný proti =p=kvantovým počítačům[/]', 'sign' => 'minus'],
            ['text' => 'bezpečnost spoléhá na =p=eliptické křivky[/]', 'sign' => 'none-purple'],
        ],
        [
            ['text' => '=a=zk-STARK[/] (Scalable Transparent)', 'sign' => 'none-accent'],
            ['text' => '=a=nevyžaduje[/] důvěryhodné nastavení', 'sign' => 'plus'],
            ['text' => 'odolný proti =a=kvantovým počítačům[/]', 'sign' => 'plus'],
            ['text' => 'důkazy jsou =a=větší[/] a výpočetně náročnější', 'sign' => 'minus'],
            ['text' => 'bezpečnost spoléhá na =a=hashovací funkce[/]', 'sign' => 'none-accent'],
        ],
    ];

    $pqcText =
        'Dnešní šifry stačí na běžné počítače, ale dostatečně výkonné =p=kvantové počítače[/] je díky Shorově a Groverově algoritmu prokazatelně prolomí. =p=Post-kvantová kryptografie[/] (PQC) proto vyvíjí nové standardy jako =p=ML-KEM (Kyber)[/], které staví na problémech (např. mřížky), jež jsou odolné i vůči kvantovému útoku.';

    $eccText =
        'ECC využívá matematiku =p=eliptických křivek[/] nad konečnými tělesy. Dosahuje =p=stejné bezpečnosti[/] jako starší RSA, ale s použitím nepoměrně =p=menších klíčů[/]. To radikálně zrychluje kryptografické operace a šetří paměť, což z ECC dělá ideální volbu pro smartphony, čipové karty nebo IoT zařízení.';

@endphp

<x-layouts.app>
    <div class>
        <div class="poster__header">
            <div class="poster__title heading-mono--purple-glow">
                Jak funguje kryp<span class="title-kern-1">t</span>ogra<span class="title-kern-2">f</span><span
                    class="title-kern-1">i</span>e?
            </div>

            <div class="poster__subtitle text-mono">
                Jak matematika zajišťuje bezpečnost moderního digitálního světa.
            </div>
        </div>

        <div class="poster__content">

            {{-- column 1: basics & foundational algorithms --}}

            <x-section-card title="Symetrická vs asymetrická" :text="$asymVsSymText">
                <x-diagrams.sym-vs-asym />
                <x-list-columns :columnsText="$asymVsSymCols" />
            </x-section-card>

            <x-section-card title="RSA" :text="$rsaText">
                <x-list-steps :rows="$rsaSteps" />
            </x-section-card>

            <x-section-card title="Digitální podpisy a HTTPS" :text="$signaturesText">
                <div class="text-mono https-card__intro">
                    <x-text-transformer :text="$httpsText" />
                </div>
                <x-diagrams.https />
            </x-section-card>

            {{-- column 2: integrity & communication --}}

            <x-section-card title="Hashovací funkce" :text="$hashText">
                <div class="hash-card__diagram">
                    <x-diagrams.hash />
                </div>
            </x-section-card>

            <x-section-card title="Eliptické křivky" text="">
                <div class="ecc-card__content">
                    <div class="ecc-card__diagram">
                        <x-diagrams.curve-geometry />
                    </div>
                    <div class="ecc-card__text text-mono">
                        <x-text-transformer :text="$eccText" />
                    </div>
                </div>
            </x-section-card>

            <x-section-card title="Zero-Knowledge Proofs (ZKP)" :text="$zkpText">
                <x-diagrams.snark-vs-stark />
            </x-section-card>

            {{-- column 3: key exchange & advanced apps --}}

            <x-section-card title="Diffie-Hellmanova výměna klíče" text="">
                <div class="dhke-card__content">
                    <div class="dhke-card__diagram">
                        <x-diagrams.diffie-hellman />
                    </div>
                    <div class="dhke-card__text text-mono">
                        <x-text-transformer :text="$dhkeText" />
                    </div>
                </div>
            </x-section-card>

            <x-section-card title="Blockchain a Kryptoměny" :text="$blockchainText">
                <div class="blockchain-card__diagram">
                    <x-diagrams.blockchain />
                </div>
            </x-section-card>

            <x-section-card title="Post-kvantová éra (PQC)" :text="$pqcText">
                <div class="pqc-card__diagram">
                    <x-diagrams.quantum />
                </div>
            </x-section-card>

        </div>
    </div>
</x-layouts.app>
