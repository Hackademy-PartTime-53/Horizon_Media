<x-main-layout>
    <x-slot name="title">Dove siamo</x-slot>

    <div class="container">
        <h1 class="text-center py-5 ParDove ">Dove siamo</h1>

        <div class="row align-items-center mb-5">
            {{-- Testo a sinistra --}}
            <div class="col-md-6 mb-4 mb-md-0">
                <p style="font-size: 1.75rem; font-weight: 700;">
                    Potete trovarci in: Via delle Stelle 42, Roma
                </p>

                {{-- Numero di telefono --}}
                <p style="font-size: 1.3rem;">Numero di Telefono
                    <a href="tel:+390612345678" style="color: #007bff; text-decoration: underline; font-weight: 600;">
                        +39 06 1234 5678
                    </a>
                </p>

                <p style="font-size: 1.3rem;">
                    o sulla nostra mail <a href="mailto:horizonmedia@mail.com" style="color: #007bff; text-decoration: underline;">horizonmedia@mail.com</a>.
                </p>
            </div>

            {{-- Mappa a destra --}}
            <div class="col-md-6">
                <div id="map" style="height: 400px; width: 100%;"></div>
            </div>
        </div>
    </div>

    <div class="ContApp container my-5">
        <div class="text-center p-4 shadow rounded" style="background-color: #f9f9f9;">
            <h4 class="mb-4 mt-5" style="font-size: 3rem;">
                Inoltre, come ultima novità, scarica l’APP 
            </h4>
            <p class="ParHori"><strong>"HorizonMedia"</strong></p>
            <p style="font-size: 3rem">Per rimanere aggiornato con le nostre notizie</p>

            {{-- Wrapper flex per loghi e telefono --}}
            <div style="display: flex; align-items: center; justify-content: center; gap: 40px; margin-top: 20px;">
                {{-- Logo Play Store a sinistra --}}
                <a href="https://play.google.com/store/apps/details?id=com.horizonmedia.app" target="_blank" rel="noopener noreferrer" style="display: inline-block; width: 140px; height: auto;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Play Store" style="width: 100%; height: auto;">
                </a>

                {{-- Immagine telefono al centro --}}
                <img src="https://cdn-icons-png.flaticon.com/512/7344/7344131.png"
                    alt="Icona telefono"
                    style="width: 300px; height: auto;">

                {{-- Logo Apple Store a destra --}}
                <a href="https://apps.apple.com/it/app/horizonmedia/id000000000" target="_blank" rel="noopener noreferrer" style="display: inline-block; width: 140px; height: auto;">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Apple Store" style="width: 100%; height: auto;">
                </a>
            </div>
        </div>
    </div>

    {{-- GIF spostata sotto tutto --}}
    <div class="text-center mb-5" style="margin-top: 40px;">
        <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExYnNzOWg5NmMzNXJnaXg4eWU2d3JjaXUxeDN1YXA2ZTJ2N3N4ODFzOSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/sRHX9qwNKQaQB48RAM/giphy.gif"
            alt="Omino che indica il mondo con giornale"
            style="max-width: 450px; height: auto; margin: 0 auto;">
    </div>

    {{-- Chatbot di assistenza stile chatbox con omino cuffie --}}
    <div class="container my-5" style="max-width: 600px; margin: 0 auto;">
        <h3 class="mb-4" style="font-weight: 700; font-family: Arial, sans-serif; color: #333;">Hai bisogno di assistenza? Scegli una domanda:</h3>

        <div class="chatbox">
            <div class="chatbot-avatar">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" alt="Omino con cuffie" />
            </div>
            <ul id="faq-list" class="chat-questions">
                <li data-answer="Prova a resettare la tua password tramite la pagina 'Password dimenticata' o, nel caso di un nome utente, scrivi per avere un nuovo nome utente." class="chat-question">
                    Non riesci ad accedere?
                </li>
                <li data-answer="Scrivi a <a href='mailto:horizonmedia@assistenza.com'>horizonmedia@assistenza.com</a>" class="chat-question">
                    Non riesci a contattarci telefonicamente? (Per urgenze)
                </li>
                <li data-answer="Scrivici pure su <a href='mailto:horizonmedia@mail.com'>horizonmedia@mail.com</a>" class="chat-question">
                    Hai altre domande da porci?
                </li>
            </ul>
        </div>

        <div id="faq-answer" class="chat-answer mt-4 p-3 shadow rounded"></div>
    </div>

    {{-- CSS Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    {{-- JS Leaflet --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    {{-- Inserisci il tuo file JS esterno, ad esempio assets/js/custom.js --}}
        <script src="{{ asset('js/mappa.js') }}"></script>


    {{-- JS per mappa e chatbot --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Leaflet map
            var map = L.map('map').setView([41.9028, 12.4964], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            var marker = L.marker([41.9028, 12.4964]).addTo(map);
            marker.bindPopup(`
                <div style="text-align:center;">
                    <strong>Siamo qui!</strong><br>
                    <a href="https://www.google.com/maps?q=41.9028,12.4964" target="_blank" style="color: #007bff; text-decoration: underline;">
                        Apri su Google Maps
                    </a>
                </div>
            `);

            // Chatbot FAQ interaction
            const faqList = document.getElementById('faq-list');
            const faqAnswer = document.getElementById('faq-answer');

            faqList.addEventListener('click', function(event) {
                const target = event.target;
                if (target.classList.contains('chat-question')) {
                    // Rimuovi classe active da tutti
                    faqList.querySelectorAll('.chat-question').forEach(el => el.classList.remove('active'));

                    // Aggiungi active a quello cliccato
                    target.classList.add('active');

                    // Imposta risposta
                    faqAnswer.innerHTML = target.getAttribute('data-answer');
                }
            });
        });
    </script>
</x-main-layout>
