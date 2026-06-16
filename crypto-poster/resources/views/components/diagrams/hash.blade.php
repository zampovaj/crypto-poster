<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 30 1000 410" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <defs>
        <pattern id="dot-grid" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="1.5" fill="#401f71" opacity="0.3" />
        </pattern>

        <marker id="arrow-cyan" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <marker id="arrow-red" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#ff4d6d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        
        <g id="circuit-line">
            <polyline points="0,0 15,0 20,5 30,5" fill="none" stroke="#e879f9" stroke-width="1.5" opacity="0.5"/>
            <circle cx="30" cy="5" r="1.5" fill="#e879f9"/>
        </g>
    </defs>

    <rect width="100%" height="100%" fill="url(#dot-grid)"/>

    <text x="180" y="50" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle" letter-spacing="0.1em">LIBOVOLNÁ DÉLKA VSTUPU</text>

    <g transform="translate(40, 100)">
        <rect x="0" y="0" width="280" height="100" rx="8" fill="#0c0616" stroke="#7dd3fc" stroke-width="2"/>
        <rect x="0" y="0" width="280" height="100" rx="8" fill="rgba(125, 211, 252, 0.05)" pointer-events="none"/>
        
        <path d="M 20 20 H 45 V 60 H 20 Z" fill="none" stroke="#7dd3fc" stroke-width="2"/>
        <path d="M 45 20 L 55 30 V 60 H 45 Z" fill="none" stroke="#7dd3fc" stroke-width="2"/>
        <path d="M 45 20 V 30 H 55" fill="none" stroke="#7dd3fc" stroke-width="2"/>
        <line x1="26" y1="35" x2="49" y2="35" stroke="#7dd3fc" stroke-width="2"/>
        <line x1="26" y1="45" x2="44" y2="45" stroke="#7dd3fc" stroke-width="2"/>

        <text x="75" y="40" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600">Soubor / Heslo</text>
        
        <rect x="75" y="55" width="180" height="30" rx="4" fill="#0c0616" stroke="#401f71" stroke-width="1.5"/>
        <text x="85" y="75" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="18" font-weight="600">Admin_12<tspan fill="#7dd3fc">3</tspan></text>
    </g>

    <g transform="translate(40, 320)">
        <rect x="0" y="0" width="280" height="100" rx="8" fill="#0c0616" stroke="#ff4d6d" stroke-width="2"/>
        <rect x="0" y="0" width="280" height="100" rx="8" fill="rgba(255, 77, 109, 0.05)" pointer-events="none"/>
        
        <path d="M 20 20 H 45 V 60 H 20 Z" fill="none" stroke="#ff4d6d" stroke-width="2"/>
        <path d="M 45 20 L 55 30 V 60 H 45 Z" fill="none" stroke="#ff4d6d" stroke-width="2"/>
        <path d="M 45 20 V 30 H 55" fill="none" stroke="#ff4d6d" stroke-width="2"/>
        <line x1="26" y1="35" x2="49" y2="35" stroke="#ff4d6d" stroke-width="2"/>
        <line x1="26" y1="45" x2="44" y2="45" stroke="#ff4d6d" stroke-width="2"/>

        <text x="75" y="40" fill="#ff4d6d" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600">Změněno (1 znak)</text>
        
        <rect x="75" y="55" width="180" height="30" rx="4" fill="#0c0616" stroke="#401f71" stroke-width="1.5"/>
        <text x="85" y="75" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="18" font-weight="600">Admin_12<tspan fill="#ff4d6d">4</tspan></text>
    </g>


    <text x="500" y="50" fill="#e879f9" opacity="0.9" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle" font-weight="600" letter-spacing="0.1em">HASH FUNKCE</text>

    <path d="M 320 150 C 380 150, 400 230, 440 230" fill="none" stroke="#7dd3fc" stroke-width="3" marker-end="url(#arrow-cyan)"/>
    <path d="M 320 370 C 380 370, 400 270, 440 270" fill="none" stroke="#ff4d6d" stroke-width="3" marker-end="url(#arrow-red)"/>

    <g transform="translate(450, 180)">
        <rect x="0" y="0" width="100" height="140" rx="12" fill="#0c0616" stroke="#e879f9" stroke-width="3"/>
        <rect x="5" y="5" width="90" height="130" rx="8" fill="rgba(232, 121, 249, 0.05)" pointer-events="none"/>
        
        <use href="#circuit-line" x="10" y="20" />
        <use href="#circuit-line" x="10" y="115" transform="scale(1, -1) translate(0, -230)"/>
        <use href="#circuit-line" x="60" y="20" transform="scale(-1, 1) translate(-100, 0)"/>
        
        <rect x="20" y="40" width="60" height="60" rx="6" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
        <text x="50" y="65" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600" text-anchor="middle">SHA</text>
        <text x="50" y="85" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="16" font-weight="700" text-anchor="middle">256</text>
    </g>

    <g transform="translate(500, 360)">
        <text x="0" y="0" fill="#fde047" font-family="'IBM Plex Sans', sans-serif" font-size="12" font-weight="600" text-anchor="middle">JEDNOSMĚRNÁ FUNKCE</text>
        <line x1="-60" y1="15" x2="60" y2="15" stroke="#fde047" stroke-width="2" stroke-dasharray="4,4"/>
        <path d="M 5 5 L -10 15 L 5 25" fill="none" stroke="#fde047" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <line x1="-10" y1="15" x2="40" y2="15" stroke="#fde047" stroke-width="2"/>
        <line x1="-10" y1="5" x2="-10" y2="25" stroke="#ff4d6d" stroke-width="3" stroke-linecap="round"/>
    </g>


    <text x="820" y="50" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle" letter-spacing="0.1em">PEVNÁ DÉLKA VÝSTUPU</text>

    <path d="M 550 230 C 590 230, 620 150, 680 150" fill="none" stroke="#7dd3fc" stroke-width="3" marker-end="url(#arrow-cyan)"/>
    <path d="M 550 270 C 590 270, 620 370, 680 370" fill="none" stroke="#ff4d6d" stroke-width="3" marker-end="url(#arrow-red)"/>

    <g transform="translate(690, 100)">
        <rect x="0" y="0" width="280" height="100" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
        
        <text x="20" y="30" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600">Digest (256-bit)</text>
        
        <rect x="20" y="45" width="240" height="40" rx="4" fill="rgba(125, 211, 252, 0.1)" stroke="#7dd3fc" stroke-width="1"/>
        <text x="140" y="62" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="13" text-anchor="middle">8c6976e5b5410415bde90</text>
        <text x="140" y="78" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="13" text-anchor="middle">8bd4dee15dfb167a9c873</text>
    </g>

    <g transform="translate(690, 320)">
        <rect x="0" y="0" width="280" height="100" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
        
        <rect x="20" y="15" width="120" height="20" rx="4" fill="#ff4d6d"/>
        <text x="80" y="29" fill="#0c0616" font-family="'IBM Plex Sans', sans-serif" font-size="11" font-weight="700" text-anchor="middle">LAVINOVÝ EFEKT</text>
        <text x="150" y="30" fill="#f2d8f8" font-family="'IBM Plex Sans', sans-serif" font-size="14" font-weight="600" opacity="0.8">100% změna</text>
        
        <rect x="20" y="45" width="240" height="40" rx="4" fill="rgba(255, 77, 109, 0.1)" stroke="#ff4d6d" stroke-width="1"/>
        <text x="140" y="62" fill="#ff4d6d" font-family="'IBM Plex Mono', monospace" font-size="13" text-anchor="middle">e1f8c1490234a5d8b92dc</text>
        <text x="140" y="78" fill="#ff4d6d" font-family="'IBM Plex Mono', monospace" font-size="13" text-anchor="middle">18148a1d65dfc2d4b1fa3</text>
    </g>

</svg>