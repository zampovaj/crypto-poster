<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 380" fill="none"
        {{ $attributes->merge(['class' => 'w-full h-auto']) }}>
        
        <rect width="100%" height="100%" fill="transparent" />

        <line x1="400" y1="10" x2="400" y2="370" stroke="#401f71" stroke-width="2" stroke-dasharray="4,4" opacity="0.6" />

        <g transform="translate(0, 0)">
            <text x="200" y="30" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="24" text-anchor="middle" font-weight="600" letter-spacing="0.05em">zk-SNARK</text>
            <text x="200" y="50" fill="#f2d8f8" opacity="0.7" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Succinct Non-interactive ARgument of Knowledge</text>

            <rect x="30" y="80" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="40" y="90" width="40" height="40" rx="6" fill="#401f71" stroke="#e879f9" stroke-width="2" />
            <circle cx="56" cy="106" r="4" fill="none" stroke="#e879f9" stroke-width="2"/>
            <line x1="59" y1="109" x2="66" y2="116" stroke="#e879f9" stroke-width="2"/>
            <line x1="63" y1="113" x2="65" y2="111" stroke="#e879f9" stroke-width="2"/>
            <line x1="66" y1="116" x2="68" y2="114" stroke="#e879f9" stroke-width="2"/>
            
            <text x="95" y="105" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Důvěryhodné nastavení</text>
            <text x="95" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Vyžaduje počáteční ceremoniál (Trusted Setup).</text>

            <rect x="30" y="150" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="40" y="160" width="40" height="40" rx="6" fill="#401f71" stroke="#e879f9" stroke-width="2" />
            <rect x="52" y="170" width="16" height="20" rx="2" fill="none" stroke="#e879f9" stroke-width="2"/>
            <line x1="56" y1="176" x2="64" y2="176" stroke="#e879f9" stroke-width="1.5"/>
            <line x1="56" y1="180" x2="60" y2="180" stroke="#e879f9" stroke-width="1.5"/>
            
            <text x="95" y="175" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Kompaktní důkaz</text>
            <text x="95" y="195" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Velmi malá velikost (bajtů), rychlé ověření.</text>

            <rect x="30" y="220" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="40" y="230" width="40" height="40" rx="6" fill="#401f71" stroke="#e879f9" stroke-width="2" />
            <path d="M 50 250 C 50 238, 70 238, 70 250 C 70 262, 50 262, 50 250" fill="none" stroke="#e879f9" stroke-width="2"/>
            <circle cx="60" cy="250" r="2" fill="#e879f9"/>
            <line x1="45" y1="250" x2="75" y2="250" stroke="#e879f9" stroke-width="1" opacity="0.4"/>

            <text x="95" y="245" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Kryptografický základ</text>
            <text x="95" y="265" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Založeno na eliptických křivkách (ECC).</text>

            <rect x="30" y="290" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="40" y="300" width="40" height="40" rx="6" fill="#401f71" stroke="#e879f9" stroke-width="2" />
            <ellipse cx="60" cy="320" rx="12" ry="4" transform="rotate(45 60 320)" stroke="#e879f9" stroke-width="1.5" fill="none" opacity="0.4"/>
            <ellipse cx="60" cy="320" rx="12" ry="4" transform="rotate(-45 60 320)" stroke="#e879f9" stroke-width="1.5" fill="none" opacity="0.4"/>
            <line x1="50" y1="310" x2="70" y2="330" stroke="#e879f9" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="70" y1="310" x2="50" y2="330" stroke="#e879f9" stroke-width="2.5" stroke-linecap="round"/>

            <text x="95" y="315" fill="#e879f9" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Kvantová odolnost: NE</text>
            <text x="95" y="335" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Zranitelné Shorrovým algoritmem v budoucnu.</text>
        </g>

        <g transform="translate(0, 0)">
            <text x="600" y="30" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="24" text-anchor="middle" font-weight="600" letter-spacing="0.05em">zk-STARK</text>
            <text x="600" y="50" fill="#f2d8f8" opacity="0.7" font-family="'IBM Plex Sans', sans-serif" font-size="12" text-anchor="middle">Scalable Transparent ARgument of Knowledge</text>

            <rect x="430" y="80" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="440" y="90" width="40" height="40" rx="6" fill="#401f71" stroke="#7dd3fc" stroke-width="2" />
            <polygon points="460,98 468,103 468,113 460,118 452,113 452,103" fill="none" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="460" y1="98" x2="460" y2="108" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="452" y1="103" x2="460" y2="108" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="468" y1="103" x2="460" y2="108" stroke="#7dd3fc" stroke-width="2"/>
            <line x1="460" y1="108" x2="460" y2="118" stroke="#7dd3fc" stroke-width="2"/>
            
            <text x="495" y="105" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Transparentní</text>
            <text x="495" y="125" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Bez tajného nastavení (veřejná náhodnost).</text>

            <rect x="430" y="150" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="440" y="160" width="40" height="40" rx="6" fill="#401f71" stroke="#7dd3fc" stroke-width="2" />
            <rect x="456" y="168" width="12" height="16" rx="2" fill="none" stroke="#7dd3fc" stroke-width="1.5" opacity="0.4"/>
            <rect x="453" y="171" width="12" height="16" rx="2" fill="#401f71" stroke="#7dd3fc" stroke-width="1.5" opacity="0.8"/>
            <rect x="450" y="174" width="12" height="16" rx="2" fill="#401f71" stroke="#7dd3fc" stroke-width="1.5"/>
            <line x1="453" y1="179" x2="459" y2="179" stroke="#7dd3fc" stroke-width="1.5"/>
            <line x1="453" y1="183" x2="457" y2="183" stroke="#7dd3fc" stroke-width="1.5"/>

            <text x="495" y="175" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Větší velikost důkazu</text>
            <text x="495" y="195" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Desítky kilobajtů, ale masivně škálovatelné.</text>

            <rect x="430" y="220" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="440" y="230" width="40" height="40" rx="6" fill="#401f71" stroke="#7dd3fc" stroke-width="2" />
            <path d="M 450 240 L 460 236 L 470 240 V 248 C 470 256, 460 262, 460 262 C 460 262, 450 256, 450 248 Z" fill="none" stroke="#7dd3fc" stroke-width="2"/>
            <text x="460" y="254" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="12" font-weight="600" text-anchor="middle">H</text>

            <text x="495" y="245" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Kryptografický základ</text>
            <text x="495" y="265" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Založeno pouze na hashovacích funkcích.</text>

            <rect x="430" y="290" width="340" height="60" rx="8" fill="#0c0616" stroke="#401f71" stroke-width="2"/>
            <rect x="440" y="300" width="40" height="40" rx="6" fill="#401f71" stroke="#7dd3fc" stroke-width="2" />
            <ellipse cx="460" cy="320" rx="12" ry="4" transform="rotate(45 460 320)" stroke="#7dd3fc" stroke-width="1.5" fill="none" opacity="0.4"/>
            <ellipse cx="460" cy="320" rx="12" ry="4" transform="rotate(-45 460 320)" stroke="#7dd3fc" stroke-width="1.5" fill="none" opacity="0.4"/>
            <path d="M 453 320 L 458 325 L 467 313" fill="none" stroke="#7dd3fc" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>

            <text x="495" y="315" fill="#7dd3fc" font-family="'IBM Plex Mono', monospace" font-size="14" font-weight="600">Kvantová odolnost: ANO</text>
            <text x="495" y="335" fill="#f2d8f8" opacity="0.8" font-family="'IBM Plex Sans', sans-serif" font-size="12">Post-kvantově bezpečné (PQC standard).</text>
        </g>
    </svg>
</div>