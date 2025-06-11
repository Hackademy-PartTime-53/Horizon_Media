<x-main-layout>

  <x-slot name="title">
      Articoli
  </x-slot>

  <div class="container my-5">
    <div class="row g-3">
      @foreach ($articles as $article)
        <div class="col-12 col-md-3 d-flex">
          <div class="card d-flex flex-column h-100 w-100">
            <img src="{{ Storage::url($article->image) }}" 
                 class="card-img-top object-fit-cover" 
                 alt="Immagine dell'articolo: {{ $article->title }}" 
                 style="height: 180px;">
            <div class="card-body flex-grow-1 d-flex flex-column">
              <h5 class="card-title">{{ $article->title }}</h5>
              <p class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</p>
              <p class="small text-muted mb-1">Categoria:
                <a href="{{ route('article.byCategory', $article->category) }}" 
                   class="text-capitalize text-muted">{{ $article->category->name }}</a>
              </p>

              {{-- Qui inserisco i tag --}}
              <div class="mb-2">
                @foreach ($article->tags as $tag)
                  <span class="badge bg-dark me-1">#{{ $tag->name }}</span>
                @endforeach
              </div>

              <p class="fs-6 mb-0">Redattore:
                <a href="{{ route('article.byUser', $article->user) }}" 
                   class="text-capitalize fw-bold text-muted">{{ $article->user->name }}</a>
              </p>
              <div class="mt-auto"></div> <!-- spinge il footer in basso -->
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
              <small class="text-muted">Redatto il {{ $article->created_at->format('d/m/Y') }}</small>
              <a href="{{ route ('article.show',['article'=>$article]) }}" 
                 class="btn btn-outline-secondary btn-sm">Leggi</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div class="bgcolor" style="padding-bottom: 800px;"></div>






</x-main-layout>


