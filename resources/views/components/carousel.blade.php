<div class="car position-absolute top-50 start-50 translate-middle w-100">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      @foreach($articles->chunk(3) as $idx => $chunk)
        <div class="carousel-item @if($idx === 0) active @endif">
          <div class="container">
            <div class="row g-2 align-items-stretch">
              @foreach($chunk as $article)
                <div class="col-12 col-md-4 d-flex">
                  <div class="card bg-dark text-white border-0 w-100">
                    <div class="ratio ratio-4x3">
                      <img src="{{ asset('storage/' . $article->image) }}"
                           class="card-img-top object-fit-cover"
                           alt="{{ $article->title }}">
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-end bg-opacity-0 p-2">
                      <h5 class="card-title">{{ $article->title }}</h5>
                      <p class="card-text">{{ $article->subtitle }}</p>
                      <a href="{{ route('article.show', $article) }}" class="btn btn-dark btn-outline-light btn-sm">Leggi</a>
                    </div>
                  </div>
                </div>
              @endforeach
              @for($i = 0; $i < 3 - $chunk->count(); $i++)
                <div class="col-12 col-md-4 d-none d-md-block"></div>
              @endfor
            </div>
          </div>
        </div>
      @endforeach

        <p class="small text-muted my-0">
        @foreach ($article->tags as $tag)
            {{ $tag->name }}
        @endforeach
    </p>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Successivo</span>
    </button>
  </div>
</div>
