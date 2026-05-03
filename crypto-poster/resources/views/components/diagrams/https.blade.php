<svg xmlns="http://www.w3.org/2000/svg" viewBox="-20 0 1060 650" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <!-- DEFINITIONS -->
    <defs>
        <!-- Standard Purple Arrowhead -->
        <marker id="arrow-purple" markerWidth="12" markerHeight="12" refX="9" refY="6" orient="auto">
            <path d="M0,2 L9,6 L0,10" fill="none" stroke="#401f71" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <!-- Green Arrowhead for the final secure step -->
        <marker id="arrow-green" markerWidth="12" markerHeight="12" refX="9" refY="6" orient="auto">
            <path d="M0,2 L9,6 L0,10" fill="none" stroke="#2ef8a0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
    </defs>

    <!-- ============================================================
         BACKGROUND CONNECTING ARROWS
         ============================================================ -->
    
    <!-- Arrow 1 to 2 -->
    <line x1="280" y1="150" x2="345" y2="150" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>
    
    <!-- Arrow 2 to 3 -->
    <line x1="610" y1="150" x2="675" y2="150" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>
    
    <!-- Snake Arrow (3 to 4) - Precise Cubic Bezier Curve -->
    <path d="M 940 150 C 1030 150, 1030 315, 850 315 L 150 315 C 40 315, 40 480, 180 480" 
          fill="none" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>

    <!-- Arrow 4 to 5 -->
    <line x1="450" y1="480" x2="515" y2="480" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>


    <!-- ============================================================
         ROW 1: Handshake Initialization
         ============================================================ -->

    <!-- STEP 1: CLIENT HELLO -->
    <g transform="translate(30, 50)">
        <rect width="250" height="200" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        
        <!-- Icon (Cyan) -->
        <g transform="translate(95, 25)">
            <rect x="0" y="0" width="60" height="40" rx="4" fill="#0c0616" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="0" y1="12" x2="60" y2="12" stroke="#7dd3fc" stroke-width="2"/>
            <circle cx="8" cy="6" r="2" fill="#7dd3fc"/>
            <circle cx="16" cy="6" r="2" fill="#7dd3fc"/>
            <path d="M70 10 Q85 20 70 30" fill="none" stroke="#7dd3fc" stroke-width="2" stroke-linecap="round"/>
            <path d="M78 2 Q98 20 78 38" fill="none" stroke="#7dd3fc" stroke-width="2" stroke-linecap="round"/>
        </g>

        <!-- Content -->
        <text x="125" y="100" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">1. CLIENT HELLO</text>
        <text x="125" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="13" text-anchor="middle">
            <tspan x="125" dy="0">Prohlížeč zahajuje spojení.</tspan>
            <tspan x="125" dy="18">Odesílá podporované verze TLS,</tspan>
            <tspan x="125" dy="18">šifrovací sady a náhodná</tspan>
            <tspan x="125" dy="18">data pro odvození klíčů.</tspan>
        </text>
    </g>


    <!-- STEP 2: SERVER HELLO -->
    <g transform="translate(360, 50)">
        <rect width="250" height="200" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        
        <!-- Icon (Purple) -->
        <g transform="translate(105, 20)">
            <!-- Server -->
            <rect x="0" y="0" width="40" height="50" rx="4" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
            <line x1="0" y1="16" x2="40" y2="16" stroke="#e879f9" stroke-width="2"/>
            <line x1="0" y1="32" x2="40" y2="32" stroke="#e879f9" stroke-width="2"/>
            <circle cx="30" cy="8" r="2" fill="#e879f9"/>
            <circle cx="30" cy="24" r="2" fill="#e879f9"/>
            <!-- Doc/Cert sliding out -->
            <path d="M-20 15 H0 V45 H-20 Z" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
            <line x1="-15" y1="25" x2="-5" y2="25" stroke="#e879f9" stroke-width="2"/>
            <line x1="-15" y1="32" x2="-5" y2="32" stroke="#e879f9" stroke-width="2"/>
        </g>

        <!-- Content -->
        <text x="125" y="100" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">2. ODPOVĚĎ SERVERU</text>
        <text x="125" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="13" text-anchor="middle">
            <tspan x="125" dy="0">Server vybere šifrovací sadu</tspan>
            <tspan x="125" dy="18">a odešle svůj certifikát.</tspan>
            <tspan x="125" dy="18">Ten obsahuje veřejný klíč</tspan>
            <tspan x="125" dy="18">a identitu serveru.</tspan>
        </text>
    </g>


    <!-- STEP 3: CERTIFICATE VALIDATION -->
    <g transform="translate(690, 50)">
        <rect width="250" height="200" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        
        <!-- Icon (Gold) -->
        <g transform="translate(100, 20)">
            <path d="M5 0 H35 V45 H5 Z" fill="none" stroke="#fde047" stroke-width="2"/>
            <path d="M35 0 L45 10 V45 H35 Z" fill="none" stroke="#fde047" stroke-width="2"/>
            <path d="M35 0 V10 H45" fill="none" stroke="#fde047" stroke-width="2"/>
            <line x1="12" y1="15" x2="25" y2="15" stroke="#fde047" stroke-width="2"/>
            <line x1="12" y1="22" x2="30" y2="22" stroke="#fde047" stroke-width="2"/>
            <!-- Magnifying Glass -->
            <circle cx="30" cy="35" r="12" fill="#0c0616" stroke="#fde047" stroke-width="2"/>
            <line x1="39" y1="44" x2="48" y2="53" stroke="#fde047" stroke-width="3" stroke-linecap="round"/>
            <!-- Checkmark inside glass -->
            <path d="M25 35 L28 39 L35 30" fill="none" stroke="#2ef8a0" stroke-width="2.5" stroke-linecap="round"/>
        </g>

        <!-- Content -->
        <text x="125" y="100" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">3. OVĚŘENÍ IDENTITY</text>
        <text x="125" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="13" text-anchor="middle">
            <tspan x="125" dy="0">Prohlížeč ověřuje certifikát vůči</tspan>
            <tspan x="125" dy="18">důvěryhodné autoritě (CA).</tspan>
            <tspan x="125" dy="18">Tím se brání útokům typu</tspan>
            <tspan x="125" dy="18">„man-in-the-middle“.</tspan>
        </text>
    </g>


    <!-- ============================================================
         ROW 2: Key Exchange & Secure Tunnel
         ============================================================ -->

    <!-- STEP 4: KEY EXCHANGE -->
    <g transform="translate(200, 380)">
        <rect width="250" height="200" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        
        <!-- Icon (Forging the Symmetric Key) -->
        <g transform="translate(125, 45)">
            <!-- Client Node (Cyan) -->
            <circle cx="-35" cy="0" r="6" fill="#0c0616" stroke="#7dd3fc" stroke-width="2"/>
            <!-- Server Node (Purple) -->
            <circle cx="35" cy="0" r="6" fill="#0c0616" stroke="#ea8cf8" stroke-width="2"/>
            
            <!-- Exchange Paths -->
            <path d="M -25 -8 Q 0 -20 25 -8" fill="none" stroke="#ea8cf8" stroke-width="2"/>
            <polygon points="25,-8 18,-11 23,-3" fill="#ea8cf8"/>
            
            <path d="M 25 8 Q 0 20 -25 8" fill="none" stroke="#7dd3fc" stroke-width="2"/>
            <polygon points="-25,8 -18,11 -23,3" fill="#7dd3fc"/>

            <!-- New Shared Symmetric Key in the center (Green) -->
            <g transform="translate(-10, -3) scale(0.8)">
                <circle cx="5" cy="0" r="5" fill="none" stroke="#f2d8f8" stroke-width="2.5"/>
                <line x1="12" y1="0" x2="27" y2="0" stroke="#f2d8f8" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="19" y1="0" x2="19" y2="6" stroke="#f2d8f8" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="24" y1="0" x2="24" y2="6" stroke="#f2d8f8" stroke-width="2.5" stroke-linecap="round"/>
            </g>
        </g>

        <!-- Content -->
        <text x="125" y="100" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">4. VÝMĚNA KLÍČŮ</text>
        <text x="125" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="13" text-anchor="middle">
            <tspan x="125" dy="0">Pomocí asymetrické kryptografie</tspan>
            <tspan x="125" dy="18">(např. Diffie-Hellman) se</tspan>
            <tspan x="125" dy="18">obě strany bezpečně dohodnou</tspan>
            <tspan x="125" dy="18">na společném tajném klíči.</tspan>
        </text>
    </g>


    <!-- STEP 5: SECURE TUNNEL -->
    <g transform="translate(530, 380)">
        <!-- Glowing Green Border for the final state -->
        <rect width="250" height="200" rx="12" fill="#0c0616" stroke="#2ef8a0" stroke-width="3"/>
        <rect width="240" height="190" x="5" y="5" rx="8" fill="rgba(46, 248, 160, 0.05)"/>
        
        <!-- Icon (Green / Shielded) -->
        <g transform="translate(60, 35)">
            <!-- Lock -->
            <path d="M15 15 V8 A10 10 0 0 1 35 8 V15" fill="none" stroke="#2ef8a0" stroke-width="2"/>
            <rect x="10" y="15" width="30" height="20" rx="4" fill="#0c0616" stroke="#2ef8a0" stroke-width="2"/>
            <!-- Data lines -->
            <line x1="50" y1="20" x2="110" y2="20" stroke="#2ef8a0" stroke-width="4" stroke-dasharray="8,6"/>
            <line x1="50" y1="30" x2="110" y2="30" stroke="#2ef8a0" stroke-width="4" stroke-dasharray="8,6"/>
            <!-- Endpoint server -->
            <rect x="120" y="6" width="20" height="30" rx="2" fill="none" stroke="#2ef8a0" stroke-width="2"/>
        </g>

        <!-- Content -->
        <text x="125" y="100" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">5. ZABEZPEČENÝ TUNEL</text>
        <text x="125" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="13" text-anchor="middle">
            <tspan x="125" dy="0">Asymetrická fáze končí.</tspan>
            <tspan x="125" dy="18">Data jsou nyní šifrována</tspan>
            <tspan x="125" dy="18">rychlou symetrickou šifrou</tspan>
            <tspan x="125" dy="18">(např. AES).</tspan>
        </text>
    </g>

</svg>