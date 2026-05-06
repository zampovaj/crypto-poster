<svg xmlns="http://www.w3.org/2000/svg" viewBox="25 30 950 580" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <defs>
        <!-- Gradients for "Mixed Parameters" -->
        <linearGradient id="mix-alice" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#fde047" />
            <stop offset="100%" stop-color="#7dd3fc" />
        </linearGradient>
        <linearGradient id="mix-bob" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#fde047" />
            <stop offset="100%" stop-color="#ea8cf8" />
        </linearGradient>

        <!-- ICON: Public Base (Hexagon) -->
        <g id="icon-base">
            <polygon points="0,-20 17.32,-10 17.32,10 0,20 -17.32,10 -17.32,-10" />
            <!-- Inner detail (creates a transparent hole matching the background) -->
            <circle cx="0" cy="0" r="6" fill="#0c0616" />
        </g>

        <!-- ICON: Private Key -->
        <g id="icon-private-key">
            <!-- Key Head -->
            <circle cx="-12" cy="0" r="10" />
            <!-- Key Hole -->
            <circle cx="-12" cy="0" r="4" fill="#0c0616" />
            <!-- Key Shaft -->
            <rect x="-4" y="-4" width="28" height="8" />
            <!-- Key Teeth -->
            <rect x="10" y="4" width="4" height="6" />
            <rect x="18" y="4" width="4" height="6" />
        </g>

        <!-- ICON: Mixed Data Token (Hexagon with Keyhole) -->
        <g id="icon-mixed">
            <polygon points="0,-22 19,-11 19,11 0,22 -19,11 -19,-11" />
            <!-- Keyhole Cutout -->
            <path d="M -3 -4 A 4 4 0 1 1 3 -4 L 4 6 L -4 6 Z" fill="#0c0616" />
        </g>

        <!-- ICON: Final Master Key -->
        <g id="icon-master-key">
            <!-- Diamond shaped Head -->
            <polygon points="-16,-12 -4,0 -16,12 -28,0" />
            <circle cx="-16" cy="0" r="4" fill="#0c0616" />
            <!-- Thick Shaft -->
            <rect x="-8" y="-4" width="34" height="8" />
            <!-- Elaborate Teeth -->
            <rect x="10" y="4" width="16" height="8" />
            <rect x="14" y="6" width="4" height="6" fill="#0c0616" />
        </g>
        
        <!-- Plus Sign -->
        <g id="plus-sign">
            <line x1="-8" y1="0" x2="8" y2="0" stroke="#f2d8f8" stroke-width="3" stroke-linecap="round"/>
            <line x1="0" y1="-8" x2="0" y2="8" stroke="#f2d8f8" stroke-width="3" stroke-linecap="round"/>
        </g>

        <!-- Arrows -->
        <marker id="arrow-cyan" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <marker id="arrow-purple" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#ea8cf8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
        <marker id="arrow-green" markerWidth="10" markerHeight="10" refX="8" refY="5" orient="auto">
            <path d="M0,2 L8,5 L0,8" fill="none" stroke="#2ef8a0" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </marker>
    </defs>

    <!-- ==========================================
         BACKGROUND ZONES
         ========================================== -->
    <!-- Alice's Secure Zone -->
    <rect x="30" y="50" width="300" height="540" rx="16" fill="rgba(125, 211, 252, 0.03)" stroke="#401f71" stroke-width="2" stroke-dasharray="8,8"/>
    <text x="180" y="90" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="20" text-anchor="middle" font-weight="600" letter-spacing="0.1em">ALICE</text>

    <!-- Bob's Secure Zone -->
    <rect x="670" y="50" width="300" height="540" rx="16" fill="rgba(234, 140, 248, 0.03)" stroke="#401f71" stroke-width="2" stroke-dasharray="8,8"/>
    <text x="820" y="90" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="20" text-anchor="middle" font-weight="600" letter-spacing="0.1em">BOB</text>

    <!-- Public Channel Zone (Center) -->
    <rect x="350" y="50" width="300" height="540" rx="16" fill="rgba(253, 224, 71, 0.02)" stroke="#401f71" stroke-width="1"/>
    <text x="500" y="90" fill="#fde047" opacity="0.8" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle" letter-spacing="0.1em">VEŘEJNÝ KANÁL</text>


    <!-- ==========================================
         STEP 1: PUBLIC PARAMETERS
         ========================================== -->
    <g transform="translate(500, 120)">
        <use href="#icon-base" fill="#fde047" />
    </g>
    <text x="500" y="165" fill="#fde047" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">Základní hodnota</text>
    <text x="500" y="185" fill="#fde047" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle">g, p (Veřejné)</text>
    
    <!-- Arrows distributing public value -->
    <line x1="460" y1="120" x2="300" y2="120" stroke="#fde047" stroke-width="2" stroke-dasharray="4,4"/>
    <line x1="540" y1="120" x2="700" y2="120" stroke="#fde047" stroke-width="2" stroke-dasharray="4,4"/>


    <!-- ==========================================
         STEP 2: PRIVATE KEYS
         ========================================== -->
    <!-- Alice's Secret -->
    <g transform="translate(180, 150)">
        <use href="#icon-private-key" fill="#7dd3fc" />
    </g>
    <text x="170" y="185" fill="#7dd3fc" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">Tajný klíč Alice</text>
    <text x="228" y="185" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="15" font-weight="500" text-anchor="middle">a</text>
 
    <!-- Bob's Secret -->
    <g transform="translate(820, 150)">
        <use href="#icon-private-key" fill="#ea8cf8" />
    </g>
    <text x="815" y="185" fill="#ea8cf8" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">Tajný klíč Boba</text>
    <text x="875" y="185" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="15" font-weight="500" text-anchor="middle">b</text>


    <!-- ==========================================
         STEP 3: MIXING PUBLIC + PRIVATE
         ========================================== -->
    <line x1="180" y1="205" x2="180" y2="235" stroke="#7dd3fc" stroke-width="2" marker-end="url(#arrow-cyan)"/>
    <line x1="820" y1="205" x2="820" y2="235" stroke="#ea8cf8" stroke-width="2" marker-end="url(#arrow-purple)"/>

    <!-- Alice Mixes -->
    <g transform="translate(180, 280)">
        <use href="#icon-mixed" fill="url(#mix-alice)" />
    </g>
    <text x="180" y="325" fill="#f2d8f8" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">Smíchaná hodnota</text>
    <text x="180" y="345" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle">A = g<tspan baseline-shift="super" font-size="12">a</tspan> mod p</text>

    <!-- Bob Mixes -->
    <g transform="translate(820, 280)">
        <use href="#icon-mixed" fill="url(#mix-bob)" />
    </g>
    <text x="820" y="325" fill="#f2d8f8" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">Smíchaná hodnota</text>
    <text x="820" y="345" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle">B = g<tspan baseline-shift="super" font-size="12">b</tspan> mod p</text>


    <!-- ==========================================
         STEP 4: THE EXCHANGE (Crossing the channel)
         ========================================== -->
    <g transform="translate(0, -40)">
        <!-- Alice sends to Bob -->
        <path d="M 220 330 C 400 330, 400 420, 780 420" fill="none" stroke="url(#mix-alice)" stroke-width="4" marker-end="url(#arrow-cyan)" stroke-linecap="round"/>
        <!-- Bob sends to Alice -->
        <path d="M 780 330 C 600 330, 600 420, 220 420" fill="none" stroke="url(#mix-bob)" stroke-width="4" marker-end="url(#arrow-purple)" stroke-linecap="round"/>
    </g>
    
    <!-- Warning Text -->
    <rect x="360" y="315" width="280" height="40" rx="6" fill="#0c0616" stroke="#ff4d6d" stroke-width="1" opacity="0.9"/>
    <text x="500" y="333" fill="#ff4d6d" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Útočník vidí pouze smíchané hodnoty,</text>
    <text x="500" y="348" fill="#ff4d6d" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">z těch nelze získat tajný klíč.</text>


    <!-- ==========================================
         STEP 5: ADDING PRIVATE TO RECEIVED MIX
         ========================================== -->
    <!-- Alice's side: Received Mix (Bob) + Alice's private -->
    <g transform="translate(140, 410) scale(0.65)">
        <use href="#icon-mixed" fill="url(#mix-bob)" />
    </g>
    <g transform="translate(180, 410)"><use href="#plus-sign" /></g>
    <g transform="translate(220, 410) scale(0.65)">
        <use href="#icon-private-key" fill="#7dd3fc" />
    </g>

    <!-- Bob's side: Received Mix (Alice) + Bob's private -->
    <g transform="translate(780, 410) scale(0.65)">
        <use href="#icon-mixed" fill="url(#mix-alice)" />
    </g>
    <g transform="translate(820, 410)"><use href="#plus-sign" /></g>
    <g transform="translate(860, 410) scale(0.65)">
        <use href="#icon-private-key" fill="#ea8cf8" />
    </g>


    <!-- ==========================================
         STEP 6: FINAL SHARED SECRET
         ========================================== -->
    <line x1="180" y1="435" x2="180" y2="465" stroke="#2ef8a0" stroke-width="2" marker-end="url(#arrow-green)"/>
    <line x1="820" y1="435" x2="820" y2="465" stroke="#2ef8a0" stroke-width="2" marker-end="url(#arrow-green)"/>

    <!-- Alice's Final -->
    <g transform="translate(180, 495) scale(1.1)">
        <use href="#icon-master-key" fill="#2ef8a0" />
    </g>
    <text x="180" y="535" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">Tajný Klíč S</text>
    <text x="180" y="555" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle">B<tspan baseline-shift="super" font-size="10">a</tspan> mod p</text>

    <!-- Bob's Final -->
    <g transform="translate(820, 495) scale(1.1)">
        <use href="#icon-master-key" fill="#2ef8a0" />
    </g>
    <text x="820" y="535" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="16" text-anchor="middle" font-weight="600">Tajný Klíč S</text>
    <text x="820" y="555" fill="#2ef8a0" font-family="'IBM Plex Mono', monospace" font-size="14" text-anchor="middle">A<tspan baseline-shift="super" font-size="10">b</tspan> mod p</text>

    <!-- Center Equality / Unification -->
    <line x1="280" y1="510" x2="720" y2="510" stroke="#2ef8a0" stroke-width="2" stroke-dasharray="4,4"/>
    <rect x="420" y="495" width="160" height="30" rx="15" fill="#0c0616" stroke="#2ef8a0" stroke-width="2"/>
    <text x="500" y="515" fill="#2ef8a0" font-family="'IBM Plex Sans', sans-serif" font-size="14" text-anchor="middle" font-weight="600">STEJNÝ VÝSLEDEK</text>

</svg>