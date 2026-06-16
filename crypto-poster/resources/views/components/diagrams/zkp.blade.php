<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 70 1000 450" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <defs>
        <pattern id="dot-grid" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="1.5" fill="#401f71" opacity="0.3" />
        </pattern>

        <marker id="arrow-cyan" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <marker id="arrow-purple" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#ea8cf8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <marker id="arrow-gold" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#fde047" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>

        <g id="icon-public-doc">
            <path d="M -12 -16 H 4 L 12 -6 V 16 H -12 Z" fill="none" stroke="#7dd3fc" stroke-width="2"/>
            <path d="M 4 -16 V -6 H 12" fill="none" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="-6" y1="0" x2="6" y2="0" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="-6" y1="6" x2="6" y2="6" stroke="#7dd3fc" stroke-width="2"/>
        </g>

        <g id="icon-secret-key">
            <polygon points="-12,-9 -3,0 -12,9 -21,0" fill="none" stroke="#fde047" stroke-width="2"/>
            <circle cx="-12" cy="0" r="2" fill="#fde047" />
            <rect x="-6" y="-3" width="26" height="6" fill="none" stroke="#fde047" stroke-width="2"/>
            <rect x="8" y="3" width="12" height="6" fill="#fde047" />
            <rect x="11" y="5" width="3" height="4" fill="#0c0616" />
        </g>

        <g id="icon-proof-token">
            <polygon points="0,-22 19,-11 19,11 0,22 -19,11 -19,-11" fill="#0c0616" stroke="#e879f9" stroke-width="2.5"/>
            <polygon points="0,-14 12,-7 12,7 0,14 -12,7 -12,-7" fill="none" stroke="#7dd3fc" stroke-width="1.5" opacity="0.8"/>
            <text x="0" y="5" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="700" text-anchor="middle">π</text>
        </g>
    </defs>

    <rect width="100%" height="100%" fill="url(#dot-grid)"/>

    <rect x="30" y="90" width="320" height="400" rx="16" fill="rgba(125, 211, 252, 0.02)" stroke="#401f71" stroke-width="2" stroke-dasharray="8,8"/>
    <text x="190" y="125" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="600" text-anchor="middle" letter-spacing="0.1em">DOKAZOVATEL (Prover)</text>

    <rect x="650" y="90" width="320" height="400" rx="16" fill="rgba(234, 140, 248, 0.02)" stroke="#401f71" stroke-width="2" stroke-dasharray="8,8"/>
    <text x="810" y="125" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="600" text-anchor="middle" letter-spacing="0.1em">OVĚŘOVATEL (Verifier)</text>

    <text x="500" y="125" fill="#f2d8f8" opacity="0.5" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600" text-anchor="middle" letter-spacing="0.1em">SÍŤ</text>


    <line x1="160" y1="190" x2="680" y2="190" stroke="#7dd3fc" stroke-width="2.5" marker-end="url(#arrow-cyan)"/>
    
    <path d="M 200 190 L 200 250 L 230 250" fill="none" stroke="#7dd3fc" stroke-width="2.5" marker-end="url(#arrow-cyan)"/>

    <line x1="160" y1="410" x2="430" y2="410" stroke="#fde047" stroke-width="2.5" stroke-dasharray="6,4"/>
    
    <path d="M 200 410 L 200 310 L 230 310" fill="none" stroke="#fde047" stroke-width="2.5" marker-end="url(#arrow-gold)"/>

    <line x1="330" y1="280" x2="680" y2="280" stroke="#ea8cf8" stroke-width="3" marker-end="url(#arrow-purple)"/>


    <g transform="translate(120, 190)">
        <circle cx="0" cy="0" r="25" fill="#0c0616" stroke="#7dd3fc" stroke-width="2"/>
        <use href="#icon-public-doc" />
        <text x="0" y="-35" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600" text-anchor="middle">Veřejná data (x)</text>
    </g>

    <g transform="translate(120, 410)">
        <circle cx="0" cy="0" r="25" fill="#0c0616" stroke="#fde047" stroke-width="2"/>
        <use href="#icon-secret-key" />
        <text x="0" y="45" fill="#fde047" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600" text-anchor="middle">Tajná znalost (w)</text>
    </g>

    <g transform="translate(240, 240)">
        <rect x="0" y="0" width="90" height="80" rx="12" fill="#0c0616" stroke="#ea8cf8" stroke-width="2.5"/>
        <rect x="4" y="4" width="82" height="72" rx="8" fill="rgba(234, 140, 248, 0.05)" pointer-events="none"/>
        <text x="45" y="35" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="600" text-anchor="middle">ZKP GEN</text>
        <text x="45" y="55" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="12" text-anchor="middle">P(x, w)</text>
    </g>


    <g transform="translate(430, 410)">
        <line x1="0" y1="-25" x2="0" y2="25" stroke="#ff4d6d" stroke-width="4"/>
        <path d="M -10 -15 L 10 15 M 10 -15 L -10 15" stroke="#ff4d6d" stroke-width="3" stroke-linecap="round"/>
        
        <rect x="-80" y="35" width="160" height="24" rx="4" fill="#0c0616" stroke="#ff4d6d" stroke-width="1.5"/>
        <text x="0" y="51" fill="#ff4d6d" font-family="'IBM Plex Sans', sans-serif" font-size="11" font-weight="600" text-anchor="middle">NIKDY NEOPUSTÍ ZAŘÍZENÍ</text>
    </g>

    <g transform="translate(500, 280) scale(1.4)">
        <use href="#icon-proof-token" />
    </g>
    <text x="500" y="335" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600" text-anchor="middle">Důkaz π</text>
    <text x="500" y="355" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Matematický otisk</text>
    <text x="500" y="370" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">nulového odhalení</text>


    <g transform="translate(690, 160)">
        <rect x="0" y="0" width="100" height="150" rx="12" fill="#0c0616" stroke="#7dd3fc" stroke-width="2.5"/>
        <rect x="4" y="4" width="92" height="142" rx="8" fill="rgba(125, 211, 252, 0.05)" pointer-events="none"/>
        
        <g transform="translate(50, 45)">
            <circle cx="-5" cy="-5" r="12" fill="none" stroke="#7dd3fc" stroke-width="2.5"/>
            <line x1="3" y1="3" x2="14" y2="14" stroke="#7dd3fc" stroke-width="3" stroke-linecap="round"/>
        </g>

        <text x="50" y="100" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="600" text-anchor="middle">OVĚŘENÍ</text>
        <text x="50" y="120" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12" text-anchor="middle">V(x, π)</text>
    </g>

    <line x1="790" y1="235" x2="840" y2="235" stroke="#2ef8a0" stroke-width="3" marker-end="url(#arrow-gold)" style="marker-end: none;"/>
    <polygon points="830,228 845,235 830,242" fill="#2ef8a0"/>

    <g transform="translate(890, 235)">
        <path d="M 0 -25 L 20 -15 V 5 C 20 20, 0 35, 0 35 C 0 35, -20 20, -20 5 V -15 Z" fill="#0c0616" stroke="#2ef8a0" stroke-width="2.5" stroke-linejoin="round"/>
        <path d="M -8 2 L -2 8 L 10 -6" fill="none" stroke="#2ef8a0" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        
        <text x="0" y="55" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600" text-anchor="middle">100% PLATNÉ</text>
        <text x="0" y="75" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Tvrzení je pravdivé</text>
    </g>

</svg>