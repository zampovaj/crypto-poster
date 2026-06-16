<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 10 1000 400" fill="none"
    {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <defs>
        <pattern id="dot-grid" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="1.5" fill="#401f71" opacity="0.3" />
        </pattern>

        <marker id="arrow-right-cyan" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </marker>
        <marker id="arrow-right-purple" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#ea8cf8" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </marker>
        <marker id="arrow-down-gold" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#fde047" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </marker>
        <marker id="arrow-left-gold" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#fde047" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </marker>
        <marker id="arrow-left-green" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#2ef8a0" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </marker>

        <g id="iso-block">
            <polygon points="0,-15 25,-2.5 25,22.5 0,10" fill="currentColor" opacity="0.15" />
            <polygon points="0,-15 -25,-2.5 -25,22.5 0,10" fill="currentColor" opacity="0.05" />
            <polygon points="-25,22.5 0,35 25,22.5 0,10" fill="currentColor" opacity="0.25" />
            <path d="M 0 -15 L 25 -2.5 L 25 22.5 L 0 35 L -25 22.5 L -25 -2.5 Z" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linejoin="round" />
            <path d="M 0 35 L 0 10 M 0 10 L -25 -2.5 M 0 10 L 25 -2.5" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linejoin="round" />
        </g>
    </defs>

    <rect width="100%" height="100%" fill="url(#dot-grid)" />

    <line x1="320" y1="125" x2="355" y2="125" stroke="#7dd3fc" stroke-width="1.5"
        stroke-dasharray="6,4" marker-end="url(#arrow-right-cyan)"></line>
    <line x1="640" y1="125" x2="675" y2="125" stroke="#ea8cf8" stroke-width="1.5"
        stroke-dasharray="6,4" marker-end="url(#arrow-right-purple)"></line>
    <line x1="820" y1="205" x2="820" y2="230" stroke="#fde047" stroke-width="1.5"
        stroke-dasharray="6,4" marker-end="url(#arrow-down-gold)"></line>
    <line x1="680" y1="315" x2="645" y2="315" stroke="#fde047" stroke-width="1.5"
        stroke-dasharray="6,4" marker-end="url(#arrow-left-gold)"></line>
    <line x1="360" y1="315" x2="325" y2="315" stroke="#2ef8a0" stroke-width="1.5"
        stroke-dasharray="6,4" marker-end="url(#arrow-left-green)"></line>

    <g transform="translate(40, 40)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="2" />

        <g transform="translate(140, 42)">
            <rect x="-30" y="-20" width="40" height="25" rx="2" fill="none" stroke="#7dd3fc"
                stroke-width="2" />
            <line x1="-35" y1="5" x2="15" y2="5" stroke="#7dd3fc" stroke-width="2" />
            <circle cx="20" cy="-7" r="6" fill="#0c0616" stroke="#7dd3fc" stroke-width="2" />
            <text x="20" y="-4" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="8"
                text-anchor="middle" font-weight="600">B</text>
            <path d="M 30 -7 L 45 -7 L 40 -10 M 45 -7 L 40 -4" fill="none" stroke="#7dd3fc" stroke-width="1.5" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">1. ŽÁDOST O TRANSAKCI</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Uživatel iniciuje transakci.</tspan>
                <tspan x="140" dy="18">Žádost je kryptograficky</tspan>
                <tspan x="140" dy="18">podepsána soukromým klíčem.</tspan>
            </text>
        </g>
    </g>

    <g transform="translate(360, 40)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="2" />

        <g transform="translate(140, 30)" color="#e879f9">
            <use href="#iso-block" />
            <line x1="-10" y1="5" x2="10" y2="15" stroke="#e879f9" stroke-width="1.5"
                opacity="0.6" />
            <line x1="-5" y1="0" x2="15" y2="10" stroke="#e879f9" stroke-width="1.5"
                opacity="0.6" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">2. VYTVOŘENÍ BLOKU</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Transakce (nebo více transakcí)</tspan>
                <tspan x="140" dy="18">je zabalena do datového</tspan>
                <tspan x="140" dy="18">kryptografického bloku.</tspan>
            </text>
        </g>
    </g>

    <g transform="translate(680, 40)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="2" />

        <g transform="translate(140, 36), scale(0.65)" color="#ea8cf8">
            <use href="#iso-block" transform="scale(0.6)" />
            <path d="M -25 -15 Q -35 -25 -45 -15" fill="none" stroke="#ea8cf8" stroke-width="1.5"
                opacity="0.6" />
            <path d="M 25 -15 Q 35 -25 45 -15" fill="none" stroke="#ea8cf8" stroke-width="1.5" opacity="0.6" />
            <path d="M -25 25 Q -35 35 -45 25" fill="none" stroke="#ea8cf8" stroke-width="1.5" opacity="0.6" />
            <path d="M 25 25 Q 35 35 45 25" fill="none" stroke="#ea8cf8" stroke-width="1.5" opacity="0.6" />
            <rect x="-55" y="-35" width="12" height="10" rx="1" fill="none" stroke="#ea8cf8"
                stroke-width="1.5" />
            <rect x="43" y="-35" width="12" height="10" rx="1" fill="none" stroke="#ea8cf8"
                stroke-width="1.5" />
            <rect x="-55" y="25" width="12" height="10" rx="1" fill="none" stroke="#ea8cf8"
                stroke-width="1.5" />
            <rect x="43" y="25" width="12" height="10" rx="1" fill="none" stroke="#ea8cf8"
                stroke-width="1.5" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">3. DISTRIBUCE (P2P)</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Nový blok je odeslán všem</tspan>
                <tspan x="140" dy="18">uzlům (počítačům) v</tspan>
                <tspan x="140" dy="18">decentralizované P2P síti.</tspan>
            </text>
        </g>
    </g>


    <g transform="translate(680, 230)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="2" />

        <g transform="translate(140, 36)" color="#fde047">
            <circle cx="0" cy="0" r="16" fill="rgba(253, 224, 71, 0.1)" stroke="#fde047"
                stroke-width="2" />
            <path d="M -6 0 L -2 5 L 8 -5" fill="none" stroke="#fde047" stroke-width="2.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <rect x="-45" y="-10" width="16" height="12" rx="1" fill="none" stroke="#fde047"
                stroke-width="1.5" />
            <rect x="29" y="-10" width="16" height="12" rx="1" fill="none" stroke="#fde047"
                stroke-width="1.5" />
            <line x1="-25" y1="-4" x2="-18" y2="-4" stroke="#fde047" stroke-width="1.5"
                stroke-dasharray="2,2" />
            <line x1="25" y1="-4" x2="18" y2="-4" stroke="#fde047" stroke-width="1.5"
                stroke-dasharray="2,2" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">4. VALIDACE UZLY</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Síť ověří platnost transakce</tspan>
                <tspan x="140" dy="18">a status uživatele pomocí</tspan>
                <tspan x="140" dy="18">konsensu (např. PoW / PoS).</tspan>
            </text>
        </g>
    </g>

    <g transform="translate(360, 230)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#2ef8a0" stroke-width="2" />
        <rect width="270" height="140" x="5" y="5" rx="8" fill="rgba(46, 248, 160, 0.03)"
            pointer-events="none" />

        <g transform="translate(140, 36)" color="#2ef8a0">
            <g transform="translate(-40, 0) scale(0.6)">
                <use href="#iso-block" />
            </g>
            <g transform="translate(0, 0) scale(0.6)">
                <use href="#iso-block" />
            </g>
            <g transform="translate(40, 0) scale(0.6)">
                <use href="#iso-block" />
            </g>
            <line x1="-30" y1="5" x2="-10" y2="5" stroke="#2ef8a0" stroke-width="2"
                stroke-dasharray="3,3" />
            <line x1="10" y1="5" x2="30" y2="5" stroke="#2ef8a0" stroke-width="2"
                stroke-dasharray="3,3" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">5. PŘIDÁNÍ DO ŘETĚZCE</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Ověřený blok je kryptograficky</tspan>
                <tspan x="140" dy="18">připojen (pomocí hashe) k</tspan>
                <tspan x="140" dy="18">předchozímu bloku v řetězci.</tspan>
            </text>
        </g>
    </g>

    <g transform="translate(40, 230)">
        <rect width="280" height="165" rx="12" fill="#0c0616" stroke="#2ef8a0" stroke-width="2" />
        <rect width="270" height="140" x="5" y="5" rx="8" fill="rgba(46, 248, 160, 0.03)"
            pointer-events="none" />

        <g transform="translate(140, 36)" color="#2ef8a0">
            <path d="M 0 -15 L 15 -8 V 5 C 15 15, 0 25, 0 25 C 0 25, -15 15, -15 5 V -8 Z" fill="none"
                stroke="#2ef8a0" stroke-width="2" />
            <circle cx="0" cy="2" r="3" fill="#2ef8a0" />
            <line x1="0" y1="5" x2="0" y2="10" stroke="#2ef8a0" stroke-width="2" />
            <line x1="-20" y1="-10" x2="-25" y2="-15" stroke="#2ef8a0" stroke-width="1.5"
                stroke-linecap="round" />
            <line x1="20" y1="-10" x2="25" y2="-15" stroke="#2ef8a0" stroke-width="1.5"
                stroke-linecap="round" />
        </g>

        <g transform="translate(0, 2)">
            <text x="140" y="85" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16"
                text-anchor="middle" font-weight="600" letter-spacing="0.05em">6. DOKONČENÍ TRANSAKCE</text>
            <text x="140" y="110" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif"
                font-size="14" text-anchor="middle">
                <tspan x="140" dy="0">Transakce je nyní dokončena.</tspan>
                <tspan x="140" dy="18">Záznam je trvalý, transparentní</tspan>
                <tspan x="140" dy="18">a prakticky nezměnitelný.</tspan>
            </text>
        </g>
    </g>

</svg>
