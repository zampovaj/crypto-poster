<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 500" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <defs>
        <pattern id="small-grid" width="20" height="20" patternUnits="userSpaceOnUse">
            <path d="M 20 0 L 0 0 0 20" fill="none" stroke="#401f71" stroke-width="0.5" opacity="0.3" />
        </pattern>
        <pattern id="large-grid" width="100" height="100" patternUnits="userSpaceOnUse">
            <rect width="100" height="100" fill="url(#small-grid)" />
            <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#401f71" stroke-width="1" opacity="0.5" />
        </pattern>

        <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto-start-reverse">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#401f71" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
    </defs>

    <rect width="100%" height="100%" fill="url(#large-grid)"/>

    <line x1="20" y1="250" x2="780" y2="250" stroke="#401f71" stroke-width="2" marker-start="url(#arrowhead)" marker-end="url(#arrowhead)"/>
    <line x1="400" y1="20" x2="400" y2="480" stroke="#401f71" stroke-width="2" marker-start="url(#arrowhead)" marker-end="url(#arrowhead)"/>

    <path d="
        M 750 50 
        C 600 120, 470 180, 400 250 
        C 330 320, 120 370, 120 250 
        C 120 130, 330 180, 400 250 
        C 470 320, 600 380, 750 450" 
        fill="none" stroke="#e879f9" stroke-width="4" stroke-linecap="round"/>

    <line x1="40" y1="220" x2="700" y2="110" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round"/>

    <line x1="580" y1="130" x2="580" y2="370" stroke="#fde047" stroke-width="2.5" stroke-dasharray="6,6"/>

    <circle cx="137" cy="204" r="6" fill="#0c0616" stroke="#7dd3fc" stroke-width="2.5"/>
    <text x="120" y="190" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="18" font-weight="600">P</text>

    <circle cx="264" cy="182" r="6" fill="#0c0616" stroke="#7dd3fc" stroke-width="2.5"/>
    <text x="255" y="160" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="18" font-weight="600">Q</text>

    <circle cx="580" cy="130" r="6" fill="#0c0616" stroke="#fde047" stroke-width="2.5"/>
    <text x="565" y="115" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="18" font-weight="600">-R</text>

    <circle cx="580" cy="370" r="7" fill="#fde047" stroke="#0c0616" stroke-width="2"/>
    <text x="600" y="366" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="20" font-weight="600">R = P+Q</text>

    <g transform="translate(40, 30)">
        <rect x="0" y="0" width="280" height="85" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
        
        <text x="140" y="35" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="20" font-weight="600" text-anchor="middle" letter-spacing="0.05em">CURVE 25519</text>
        <text x="140" y="65" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="15" text-anchor="middle">v² = u³ + 486662u² + u</text>
    </g>

</svg>