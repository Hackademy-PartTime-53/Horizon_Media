{{-- resources/views/components/hero-section.blade.php --}}
@props(['articles', 'backgroundImage'])


<div class="position-relative w-100" style="height:70vh; overflow:hidden;">
  {{-- Immagine di sfondo --}}
  <img src="{{ $backgroundImage }}" 
       class="w-100 h-100 object-fit-cover" 
       alt="Hero background">

  {{-- Overlay scuro per miglior contrasto --}}
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background: rgba(0,0,0,0.4);"></div>

  {{-- Carousel sovrapposto --}}
  <div class="position-absolute top-50 start-50 translate-middle w-75">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($articles as $idx => $article)
          <div class="carousel-item @if($idx === 0) active @endif">
            <div class="card bg-transparent border-0 text-white">
              <img src="{{ Storage::url($article->image) }}" 
                   class="card-img" 
                   alt="{{ $article->title }}">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->subtitle }}</p>
                <a href="{{ route('article.show', $article) }}" 
                   class="btn btn-outline-light btn-sm">
                  Leggi
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      {{-- Controlli --}}
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</div>
