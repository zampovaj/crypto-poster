<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -20 1000 260" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <!-- DEFINITIONS -->
    <defs>
        <marker id="arrow-purple" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#401f71" stroke-width="2"/>
        </marker>
        <marker id="arrow-green" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#2ef8a0" stroke-width="2"/>
        </marker>
    </defs>

    <!-- BACKGROUND CONNECTING LINES -->
    <!-- Base connection -->
    <text x="500" y="24" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="32"
        text-anchor="middle" font-weight="600" letter-spacing="0.1em">HTTPS</text>

    <line x1="225" y1="125" x2="275" y2="125" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>
    <line x1="475" y1="125" x2="525" y2="125" stroke="#401f71" stroke-width="4" marker-end="url(#arrow-purple)"/>
    
    <!-- Secure connection line (Step 3 to 4) -->
    <!-- Glow layer -->
    <line x1="725" y1="125" x2="775" y2="125" stroke="#2ef8a0" stroke-width="12" opacity="0.2"/>
    <!-- Core line -->
    <line x1="725" y1="125" x2="775" y2="125" stroke="#2ef8a0" stroke-width="4" marker-end="url(#arrow-green)"/>


    <!-- ==========================================
         STEP 1: CLIENT HELLO
         ========================================== -->
    <g transform="translate(25, 50)">
        <rect width="200" height="150" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        <text x="100" y="35" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">1. CLIENT HELLO</text>
        <text x="100" y="55" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Žádost o bezpečné spojení</text>
        
        <!-- Browser Icon -->
        <rect x="70" y="80" width="60" height="40" rx="4" fill="#0c0616" stroke="#7dd3fc" stroke-width="2"/>
        <line x1="70" y1="92" x2="130" y2="92" stroke="#7dd3fc" stroke-width="2"/>
        <circle cx="78" cy="86" r="2" fill="#7dd3fc"/>
        <circle cx="86" cy="86" r="2" fill="#7dd3fc"/>
        <circle cx="94" cy="86" r="2" fill="#7dd3fc"/>
        
        <!-- Signal Waves -->
        <path d="M140 90 Q150 100 140 110" fill="none" stroke="#7dd3fc" stroke-width="2" stroke-linecap="round"/>
        <path d="M148 85 Q162 100 148 115" fill="none" stroke="#7dd3fc" stroke-width="2" stroke-linecap="round"/>
    </g>


    <!-- ==========================================
         STEP 2: CERTIFICATE (Auth)
         ========================================== -->
    <g transform="translate(275, 50)">
        <rect width="200" height="150" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        <text x="100" y="35" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">2. IDENTITA</text>
        <text x="100" y="55" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Server posílá certifikát</text>
        
        <!-- Server Icon -->
        <rect x="50" y="80" width="40" height="40" rx="4" fill="#0c0616" stroke="#e879f9" stroke-width="2"/>
        <line x1="50" y1="93" x2="90" y2="93" stroke="#e879f9" stroke-width="2"/>
        <line x1="50" y1="106" x2="90" y2="106" stroke="#e879f9" stroke-width="2"/>
        <circle cx="80" cy="86" r="2" fill="#e879f9"/>
        <circle cx="80" cy="100" r="2" fill="#e879f9"/>

        <!-- Certificate Icon (Gold) -->
        <g transform="translate(100, 70)">
            <path d="M10 0 H35 V45 H10 Z" fill="none" stroke="#fde047" stroke-width="2"/>
            <!-- Folded corner -->
            <path d="M35 0 L45 10 V45 H35 Z" fill="none" stroke="#fde047" stroke-width="2"/>
            <path d="M35 0 V10 H45" fill="none" stroke="#fde047" stroke-width="2"/>
            <!-- Lines -->
            <line x1="16" y1="15" x2="30" y2="15" stroke="#fde047" stroke-width="2"/>
            <line x1="16" y1="22" x2="38" y2="22" stroke="#fde047" stroke-width="2"/>
            <!-- Seal -->
            <circle cx="32" cy="35" r="6" fill="#fde047"/>
            <path d="M30 40 L28 48 L32 45 L36 48 L34 40" fill="#fde047"/>
        </g>
    </g>


    <!-- ==========================================
         STEP 3: KEY EXCHANGE
         ========================================== -->
    <g transform="translate(525, 50)">
        <rect width="200" height="150" rx="12" fill="#0c0616" stroke="#401f71" stroke-width="3"/>
        <text x="100" y="35" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">3. VÝMĚNA KLÍČŮ</text>
        <text x="100" y="55" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Asymetrická dohoda</text>
        
        <!-- Math / Gears Icon -->
        <!-- Public Key (Gold) locking Symmetric Key (Teal) -->
        <g transform="translate(85, 75)">
            <!-- Lock body -->
            <rect x="0" y="20" width="30" height="25" rx="4" fill="none" stroke="#e879f9" stroke-width="2"/>
            <!-- Lock shackle -->
            <path d="M5 20 V10 A10 10 0 0 1 25 10 V20" fill="none" stroke="#e879f9" stroke-width="2"/>
            <!-- Symmetric key inside -->
            <circle cx="15" cy="32" r="3" fill="#7dd3fc"/>
            <line x1="15" y1="35" x2="15" y2="40" stroke="#7dd3fc" stroke-width="2"/>
        </g>
        
        <path d="M60 100 L75 100" stroke="#fde047" stroke-width="2" stroke-dasharray="2,2"/>
        <path d="M125 100 L140 100" stroke="#7dd3fc" stroke-width="2" stroke-dasharray="2,2"/>
    </g>


    <!-- ==========================================
         STEP 4: SECURE HTTPS TUNNEL
         ========================================== -->
    <g transform="translate(775, 50)">
        <!-- Glowing Green Border for the final state -->
        <rect width="200" height="150" rx="12" fill="#0c0616" stroke="#2ef8a0" stroke-width="3"/>
        <!-- Inner glow effect (subtle) -->
        <rect width="190" height="140" x="5" y="5" rx="8" fill="rgba(46, 248, 160, 0.05)"/>
        
        <text x="100" y="35" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">4. HTTPS TUNEL</text>
        <text x="100" y="55" fill="#f2d8f8" opacity="0.6" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Šifrovaný symetrický přenos</text>
        
        <!-- Secure Browser to Server Tunnel -->
        <g transform="translate(45, 90)">
            <!-- Browser -->
            <rect x="0" y="0" width="25" height="20" rx="2" fill="none" stroke="#f2d8f8" stroke-width="2"/>
            
            <!-- Tunnel Line (Green) -->
            <line x1="30" y1="10" x2="80" y2="10" stroke="#2ef8a0" stroke-width="6"/>
            <!-- Moving Data Packets (White/Teal) -->
            <line x1="40" y1="10" x2="50" y2="10" stroke="#0c0616" stroke-width="6"/>
            <line x1="60" y1="10" x2="70" y2="10" stroke="#0c0616" stroke-width="6"/>

            <!-- Server -->
            <rect x="85" y="-5" width="25" height="30" rx="2" fill="none" stroke="#f2d8f8" stroke-width="2"/>
            <line x1="85" y1="5" x2="110" y2="5" stroke="#f2d8f8" stroke-width="2"/>
        </g>
        
        <!-- Blocked Attack (Red) -->
        <g transform="translate(100, 125)">
            <path d="M-15 15 L-5 5" stroke="#ff4d6d" stroke-width="2"/>
            <path d="M-5 15 L-15 5" stroke="#ff4d6d" stroke-width="2"/>
            <text x="5" y="14" fill="#ff4d6d" font-family="'IBM Plex Sans', sans-serif" font-size="10" font-weight="600">Útočník blokován</text>
        </g>
    </g>

</svg>