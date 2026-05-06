<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 300" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <!-- DEFINITIONS -->
    <defs>
        <!-- Large Matrix Pattern for RSA (1024-bit representation) -->
        <pattern id="matrix-large" width="12" height="12" patternUnits="userSpaceOnUse">
            <rect x="2" y="2" width="8" height="8" rx="1" fill="#401f71" opacity="0.8"/>
            <circle cx="6" cy="6" r="1" fill="#ea8cf8" opacity="0.3"/>
        </pattern>
        <!-- Small Matrix Pattern for ECC (160-bit representation) -->
        <pattern id="matrix-small" width="12" height="12" patternUnits="userSpaceOnUse">
            <rect x="1" y="1" width="10" height="10" rx="2" fill="#2ef8a0" opacity="0.9"/>
            <circle cx="6" cy="6" r="2" fill="#0c0616" opacity="0.5"/>
        </pattern>
    </defs>

    <!-- ============================================================
         LEFT SIDE: RSA / DHKE (Heavy & Clunky)
         ============================================================ -->
    <g transform="translate(100, 40)">
        <!-- Giant Data Block -->
        <rect x="0" y="0" width="180" height="180" rx="8" fill="#0c0616" stroke="#ea8cf8" stroke-width="2"/>
        <rect x="6" y="6" width="168" height="168" fill="url(#matrix-large)"/>
        
        <!-- Text Labels -->
        <text x="90" y="220" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="20" text-anchor="middle" font-weight="600" letter-spacing="0.05em">RSA / DHKE</text>
        <text x="90" y="245" fill="#f2d8f8" font-family="'IBM Plex Sans', sans-serif" font-size="16" text-anchor="middle" opacity="0.8">1024-bitový klíč</text>
    </g>

    <!-- ============================================================
         CENTER: TRANSITION ARROW (Efficiency)
         ============================================================ -->
    <g transform="translate(340, 100)">
        <!-- Track line -->
        <line x1="0" y1="30" x2="120" y2="30" stroke="#401f71" stroke-width="4" stroke-dasharray="6,4"/>
        <!-- Arrowhead -->
        <polygon points="120,20 135,30 120,40" fill="#7dd3fc"/>
        
        <!-- Text Label -->
        <rect x="0" y="-15" width="130" height="24" rx="12" fill="#0c0616" stroke="#7dd3fc" stroke-width="1.5"/>
        <text x="65" y="2" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle" font-weight="600">Stejná bezpečnost</text>
        
        <text x="65" y="65" fill="#fde047" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Zlomek výpočetního</text>
        <text x="65" y="80" fill="#fde047" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">výkonu a paměti</text>
    </g>

    <!-- ============================================================
         RIGHT SIDE: ECC (Sleek & Modern)
         ============================================================ -->
    <g transform="translate(560, 40)">
        <!-- Alignment Guide (invisible bounding box to match RSA height visually) -->
        <rect x="0" y="0" width="180" height="180" fill="transparent"/>
        
        <!-- Tiny Data Block (Vertically/Horizontally Centered) -->
        <rect x="66" y="66" width="48" height="48" rx="6" fill="#0c0616" stroke="#2ef8a0" stroke-width="3" filter="drop-shadow(0 0 10px rgba(46, 248, 160, 0.4))"/>
        <rect x="72" y="72" width="36" height="36" fill="url(#matrix-small)"/>
        
        <!-- Text Labels -->
        <text x="90" y="220" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="20" text-anchor="middle" font-weight="600" letter-spacing="0.05em">ECC</text>
        <text x="90" y="245" fill="#f2d8f8" font-family="'IBM Plex Sans', sans-serif" font-size="16" text-anchor="middle" opacity="0.8">160-bitový klíč</text>
    </g>
</svg>