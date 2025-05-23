{{-- Carousel sovrapposto --}}

  <div class=" car position-absolute top-200 start-50 translate-middle w-50">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($articles as $idx =>$article)
          <div class="carousel-item @if($idx === 0) active @endif">
            <div class="card bg-transparent border-0 text-white">
              <img src="{{ asset('storage/pexels-cottonbro-8721318.jpg') }}" 
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



           <div class="carousel-item @if($idx === 0) active @endif">
            <div class="card bg-transparent border-0 text-white">
              <img src="{{ asset('storage/Cerchi-Olimpiadi-su-Ghiaccio.jpg') }}" 
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




           <div class="carousel-item @if($idx === 0) active @endif">
            <div class="card bg-transparent border-0 text-white">
              <img src="{{ asset('storage/w800_h600_csmart_u1674552943.jpeg') }}" 
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

