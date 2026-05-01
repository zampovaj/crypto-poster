<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -20 800 300" fill="none"
        {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
        <rect width="100%" height="100%" fill="transparent" />

        <g transform="translate(0, 0)">
            {{-- <text x="200" y="40" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="20" --}}
            <text x="200" y="40" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="20"
                text-anchor="middle" font-weight="600" letter-spacing="0.1em">SYMETRICKÁ</text>
                <text x="200" y="70" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="20"
                text-anchor="middle" font-weight="600" letter-spacing="0.1em">KRYPTOGRAFIE</text>
            {{-- <text x="200" y="70" fill="#f2d8f8" opacity="0.7" font-family="'IBM Plex Sans', sans-serif" font-size="14" --}}
                {{-- text-anchor="middle">1 sdílený klíč</text> --}}

            <rect x="40" y="140" width="80" height="40" rx="6" fill="#401f71" stroke="#7dd3fc"
                stroke-width="2" />
            <text x="80" y="165" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="14"
                text-anchor="middle">ALICE</text>

            <rect x="280" y="140" width="80" height="40" rx="6" fill="#401f71" stroke="#7dd3fc"
                stroke-width="2" />
            <text x="320" y="165" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="14"
                text-anchor="middle">BOB</text>

            <line x1="120" y1="160" x2="280" y2="160" stroke="#401f71" stroke-width="4"
                stroke-dasharray="8,8" />

            <rect x="180" y="140" width="40" height="40" rx="6" fill="#0c0616" stroke="#e879f9"
                stroke-width="2" />
            <path d="M190 140 V125 A10 10 0 0 1 210 125 V140" stroke="#7dd3fc" stroke-width="2" fill="none" />
            <circle cx="200" cy="160" r="4" fill="#7dd3fc" />
            <line x1="200" y1="164" x2="200" y2="170" stroke="#7dd3fc" stroke-width="2" />

            <g transform="translate(185, 210)">
                <circle cx="10" cy="10" r="8" stroke="#7dd3fc" stroke-width="2" fill="none" />
                <line x1="18" y1="10" x2="35" y2="10" stroke="#7dd3fc" stroke-width="2" />
                <line x1="26" y1="10" x2="26" y2="18" stroke="#7dd3fc" stroke-width="2" />
                <line x1="32" y1="10" x2="32" y2="18" stroke="#7dd3fc" stroke-width="2" />
            </g>
        </g>

        <line x1="400" y1="20" x2="400" y2="330" stroke="#401f71" stroke-width="2"
            opacity="0.5" stroke-dasharray="4,4" />

        <g transform="translate(400, 0)">
            <text x="200" y="40" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="20"
                text-anchor="middle" font-weight="600" letter-spacing="0.1em">ASYMETRICKÁ</text>
            <text x="200" y="70" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="20"
                text-anchor="middle" font-weight="600" letter-spacing="0.1em">KRYPTOGRAFIE</text>
            {{-- <text x="200" y="70" fill="#f2d8f8" opacity="0.7" font-family="'IBM Plex Sans', sans-serif" --}}
                {{-- font-size="14" text-anchor="middle">Veřejný / Soukromý pár</text> --}}

            <rect x="40" y="140" width="80" height="40" rx="6" fill="#401f71" stroke="#e879f9"
                stroke-width="2" />
            <text x="80" y="165" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="14"
                text-anchor="middle">ALICE</text>

            <rect x="280" y="140" width="80" height="40" rx="6" fill="#401f71" stroke="#e879f9"
                stroke-width="2" />
            <text x="320" y="165" fill="#f2d8f8" font-family="'IBM Plex Mono', monospace" font-size="14"
                text-anchor="middle">BOB</text>

            <line x1="120" y1="160" x2="280" y2="160" stroke="#401f71" stroke-width="4"
                stroke-dasharray="8,8" />

            <rect x="180" y="140" width="40" height="40" rx="6" fill="#0c0616" stroke="#e879f9"
                stroke-width="2" />
            <path d="M190 140 V125 A10 10 0 0 1 210 125 V140" stroke="#e879f9" stroke-width="2" fill="none" />
            <text x="-195" y="255" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12"
                    text-anchor="middle">Sdílený klíč</text>
            <circle cx="200" cy="160" r="4" fill="#e879f9" />
            <line x1="200" y1="164" x2="200" y2="170" stroke="#e879f9" stroke-width="2" />

            <g transform="translate(100, 210)">
                <text x="18" y="45" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="12"
                    text-anchor="middle">Bobův Veřejný</text>
                <circle cx="10" cy="10" r="8" stroke="#e879f9" stroke-width="2" fill="none" />
                <line x1="18" y1="10" x2="35" y2="10" stroke="#e879f9"
                    stroke-width="2" />
                <line x1="26" y1="10" x2="26" y2="18" stroke="#e879f9"
                    stroke-width="2" />
                <line x1="32" y1="10" x2="32" y2="18" stroke="#e879f9"
                    stroke-width="2" />
            </g>

            <g transform="translate(250, 210)">
                <text x="18" y="45" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12"
                    text-anchor="middle">Bobův Soukromý</text>
                <circle cx="10" cy="10" r="8" stroke="#7dd3fc" stroke-width="2" fill="none" />
                <line x1="18" y1="10" x2="35" y2="10" stroke="#7dd3fc"
                    stroke-width="2" />
                <line x1="26" y1="10" x2="26" y2="18" stroke="#7dd3fc"
                    stroke-width="2" />
                <line x1="32" y1="10" x2="32" y2="18" stroke="#7dd3fc"
                    stroke-width="2" />
            </g>
        </g>
    </svg>
</div>
