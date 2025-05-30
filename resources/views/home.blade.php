<x-main-layout-animation>
  <x-slot:title>Home</x-slot:title>

  @if (session('alert'))
    <div class="alert alert-danger">{{ session('alert') }}</div>
  @endif

  <div class="bgcolor" style="padding-bottom: 800px;">
    {{-- Hero con carousel --}}
    <x-hero-section :articles="$articles" />
    <x-carousel :articles="$articles" />

    <!-- Scritta che scorre da destra a sinistra -->
    <div class="news-marquee-wrapper my-5">
      <h2 class="news-marquee">Le News!</h2>
    </div>


    @if(session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
  </div>

 
<x-animation-iscritti />



  
</x-main-layout-animation>
