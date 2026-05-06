<svg xmlns="http://www.w3.org/2000/svg" viewBox="10 0 675 380" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <!-- DEFINITIONS -->
    <defs>
        <!-- Background Grid Pattern for texture -->
        <pattern id="dot-grid" width="20" height="20" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="1" fill="#401f71" opacity="0.3" />
        </pattern>
        
        <!-- Down Arrow -->
        <g id="arrow-down">
            <line x1="0" y1="0" x2="0" y2="15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <polyline points="-4,10 0,15 4,10" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
    </defs>

    <!-- Global Background Grid -->
    <rect width="100%" height="100%" fill="url(#dot-grid)"/>

    <!-- ============================================================
         LEFT PANEL: SHOR'S ALGORITHM (Purple Theme)
         ============================================================ -->
    {{-- <rect x="20" y="20" width="320" height="330" rx="16" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
    <rect x="20" y="20" width="320" height="330" rx="16" fill="rgba(232, 121, 249, 0.02)" pointer-events="none"/> --}}

    <g transform="translate(180, 90) scale(1.4)">
        <!-- Quantum Orbit -->
        <ellipse cx="0" cy="0" rx="60" ry="20" transform="rotate(20)" stroke="#e879f9" stroke-width="1.5" stroke-dasharray="4,4" fill="none" opacity="0.6"/>
        <ellipse cx="0" cy="0" rx="60" ry="20" transform="rotate(-40)" stroke="#e879f9" stroke-width="1.5" fill="none" opacity="0.3"/>
        <circle cx="45" cy="-25" r="3" fill="#e879f9"/>
        <circle cx="-55" cy="-10" r="3" fill="#e879f9"/>

        <!-- Factoring Visual (N -> p, q) -->
        <!-- Center N -->
        <rect x="-15" y="-35" width="30" height="30" rx="4" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
        <text x="0" y="-14" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">N</text>
        
        <!-- Branching Lines -->
        <line x1="-5" y1="-5" x2="-25" y2="15" stroke="#e879f9" stroke-width="2"/>
        <line x1="5" y1="-5" x2="25" y2="15" stroke="#e879f9" stroke-width="2"/>

        <!-- Factors p & q -->
        <rect x="-40" y="15" width="25" height="25" rx="4" fill="none" stroke="#e879f9" stroke-width="2"/>
        <text x="-27.5" y="32" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle">p</text>

        <rect x="15" y="15" width="25" height="25" rx="4" fill="none" stroke="#e879f9" stroke-width="2"/>
        <text x="27.5" y="32" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle">q</text>
        
        <!-- Shattered Lock Symbol (Indicating broken asymmetric) -->
        <g transform="translate(0, 50) scale(0.6)">
            <path d="M -10 5 V -5 A 10 10 0 0 1 10 -5 V 5" fill="none" stroke="#e879f9" stroke-width="3" opacity="0.5"/>
            <path d="M -5 15 L 0 5 L 10 10 L 5 25 Z" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
            <path d="M -15 5 L -5 15 L -10 25 L -20 15 Z" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
        </g>
    </g>

    <!-- Shor Text Block -->
    <text x="180" y="235" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="24" text-anchor="middle" font-weight="600" letter-spacing="0.05em">SHORŮV ALGORITMUS</text>
    <text x="180" y="265" fill="#f2d8f8" opacity="0.9" font-family="'IBM Plex Sans', sans-serif" font-size="18" text-anchor="middle" font-weight="600">Rozbití asymetrické kryptografie</text>
    
    <text x="180" y="288" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="16" text-anchor="middle">
        <tspan x="180" dy="0">Exponenciální zrychlení faktorizace.</tspan>
        <tspan x="180" dy="22">Kompletně prolamuje RSA, ECC a DH.</tspan>
    </text>

    <!-- ============================================================
         RIGHT PANEL: GROVER'S ALGORITHM (Cyan Theme)
         ============================================================ -->
    {{-- <rect x="360" y="20" width="320" height="330" rx="16" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
    <rect x="360" y="20" width="320" height="330" rx="16" fill="rgba(125, 211, 252, 0.02)" pointer-events="none"/> --}}

    <g transform="translate(520, 90) scale(1.5)">
        <!-- Search Field (Unstructured Database / Key Space) -->
        <!-- Row 1 -->
        <rect x="-45" y="-35" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <rect x="-15" y="-35" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <rect x="15" y="-35" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <!-- Row 2 -->
        <rect x="-45" y="-5" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <rect x="-15" y="-5" width="20" height="20" rx="2" fill="#7dd3fc" stroke="#7dd3fc" stroke-width="1.5"/> <!-- The Target -->
        <rect x="15" y="-5" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <!-- Row 3 -->
        <rect x="-45" y="25" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <rect x="-15" y="25" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>
        <rect x="15" y="25" width="20" height="20" rx="2" fill="none" stroke="#401f71" stroke-width="1.5"/>

        <!-- Quantum Magnifying Glass -->
        <g transform="translate(-5, 5)">
            <circle cx="0" cy="0" r="16" fill="none" stroke="#7dd3fc" stroke-width="3"/>
            <line x1="11" y1="11" x2="24" y2="24" stroke="#7dd3fc" stroke-width="4" stroke-linecap="round"/>
            <ellipse cx="0" cy="0" rx="24" ry="8" transform="rotate(-30)" stroke="#7dd3fc" stroke-width="1" fill="none" opacity="0.6"/>
        </g>
        
        <!-- Math indicator: Reduction of key space -->
        <rect x="45" y="-5" width="45" height="20" rx="4" fill="#0c0616" stroke="#401f71" stroke-width="1.5"/>
        <text x="67.5" y="9" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12" text-anchor="middle">O(√N)</text>
    </g>

    <!-- Grover Text Block -->
    <text x="520" y="235" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="24" text-anchor="middle" font-weight="600" letter-spacing="0.05em">GROVERŮV ALGORITMUS</text>
    <text x="520" y="265" fill="#f2d8f8" opacity="0.9" font-family="'IBM Plex Sans', sans-serif" font-size="18" text-anchor="middle" font-weight="600">Oslabení symetrické kryptografie</text>
    
    <text x="520" y="288" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="16" text-anchor="middle">
        <tspan x="520" dy="0">Kvadratické zrychlení prohledávání.</tspan>
        <tspan x="520" dy="22">Snižuje bezpečnost AES-256 na úroveň</tspan>
        <tspan x="520" dy="22">AES-128. Lze řešit zdvojnásobením klíče.</tspan>
    </text>

    <!-- ============================================================
         CENTER DIVIDER / VS BADGE
         ============================================================ -->
    <!-- Optional visual bridge between the two -->
    <line x1="350" y1="50" x2="350" y2="300" stroke="#401f71" stroke-width="2" stroke-dasharray="4,4"/>
    
    <rect x="330" y="155" width="40" height="40" rx="20" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
    <text x="350" y="180" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">VS</text>

</svg>