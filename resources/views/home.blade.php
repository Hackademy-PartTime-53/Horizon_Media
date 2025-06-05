<x-main-layout-animation>
  <x-slot:title>Home</x-slot:title>

  @if (session('alert'))
    <div class="alert alert-danger">{{ session('alert') }}</div>
  @endif

  <div class="bgcolor" style="padding-bottom: 500px;">
    {{-- Hero con carousel --}}
    <x-hero-section :articles="$articles" />
    <x-carousel :articles="$articles" />

    <!-- Scritta che scorre da destra a sinistra -->
    <div class="news-marquee-wrapper mt-5 mb-4 mt-md-5 mb-md-5">
      <h2 class="news-marquee">Le News!</h2>
    </div>

    @if(session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
  </div>

 
<x-animation-iscritti />

<div class="container my-5 position-relative">
  <img src="storage/LavoraConNoi.jpg" 
       alt="Lavora con noi" 
       class="img-fluid w-100 rounded shadow" 
       style="max-height: 400px; object-fit: cover;">

  <!-- Scritta centrale a sinistra -->
  <div class="position-absolute start-0 top-50 translate-middle-y ps-4">
    <h2 class="text-white fw-bold shadow-text">
      Vuoi lavorare con noi?<br>Invia la tua candidatura!
    </h2>
  </div>

  <!-- Bottone in basso a destra -->
  <a href="{{ route('careers') }}" 
     class="btn-lavora-bottom-end position-absolute">
     Lavora con noi!
  </a>
</div>

<x-shared.social />

</div>



  
</x-main-layout-animation>
