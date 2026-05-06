<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 220" fill="none" {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
    <!-- DEFINITIONS -->
    <defs>
        <!-- Lattice Pattern for background -->
        <pattern id="lattice-grid" width="30" height="30" patternUnits="userSpaceOnUse">
            <circle cx="15" cy="15" r="1.5" fill="#401f71" />
            <line x1="15" y1="15" x2="45" y2="15" stroke="#401f71" stroke-width="0.5" opacity="0.5" />
            <line x1="15" y1="15" x2="15" y2="45" stroke="#401f71" stroke-width="0.5" opacity="0.5" />
        </pattern>
    </defs>

    <!-- BACKGROUND LATTICE GRID -->
    <!-- Fades out at the edges using an opacity mask/gradient illusion, but since it's print, 
         we just keep it subtle across the whole block -->
    <rect width="100%" height="100%" fill="url(#lattice-grid)" opacity="0.6"/>

    <!-- FLOATING MATH FORMULAS -->
    <!-- Quantum Superposition -->
    <text x="20" y="30" fill="#ea8cf8" font-family="'IBM Plex Mono', monospace" font-size="12" font-weight="500" opacity="0.7">|ψ⟩ = α|0⟩ + β|1⟩</text>
    
    <!-- Lattice LWE (Learning With Errors) Formula -->
    <text x="210" y="200" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12" font-weight="500" opacity="0.7">Ax + e = b mod q</text>

    <!-- CENTRAL GRAPHIC -->
    <g transform="translate(175, 110)">
        
        <!-- Outer Quantum Orbit (Dashed Purple) -->
        <ellipse cx="0" cy="0" rx="90" ry="30" transform="rotate(90)" stroke="#401f71" stroke-width="2" stroke-dasharray="6,4" fill="none"/>
        
        <!-- Quantum Orbit 1 (Cyan) -->
        <ellipse cx="0" cy="0" rx="90" ry="25" transform="rotate(30)" stroke="#7dd3fc" stroke-width="2.5" fill="none"/>
        
        <!-- Quantum Orbit 2 (Light Purple) -->
        <ellipse cx="0" cy="0" rx="90" ry="25" transform="rotate(-30)" stroke="#ea8cf8" stroke-width="2.5" fill="none"/>

        <!-- Orbiting Qubits (Nodes) -->
        <circle cx="78" cy="45" r="4.5" fill="#7dd3fc" />
        <circle cx="-78" cy="-45" r="4.5" fill="#7dd3fc" />
        <circle cx="78" cy="-45" r="4.5" fill="#ea8cf8" />
        <circle cx="-78" cy="45" r="4.5" fill="#ea8cf8" />

        <!-- CORE: Post-Quantum Shield (Green = Secure) -->
        <!-- A solid hexagon/shield representing lattice defense blocking quantum attacks -->
        <polygon points="0,-35 25,-20 25,10 0,35 -25,10 -25,-20" fill="#0c0616" stroke="#2ef8a0" stroke-width="3" stroke-linejoin="round"/>
        
        <!-- Shield Details (Inner Lines) -->
        <polygon points="0,-25 15,-13 15,5 0,25 -15,5 -15,-13" fill="none" stroke="#2ef8a0" stroke-width="1" opacity="0.5"/>
        
        <!-- Core Keyhole -->
        <circle cx="0" cy="-3" r="5" fill="#2ef8a0" />
        <path d="M -3 -3 L 3 -3 L 4.5 10 L -4.5 10 Z" fill="#2ef8a0" />
        
    </g>
</svg>