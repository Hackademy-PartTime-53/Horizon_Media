<x-main-layout>
    <x-slot name="title"> articolo </x-slot>
    
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 page-article-title">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid"
                    alt="Immagine dell'articolo: {{ $article->title }}">

                <div class="text-center">
                    <h2 class="display-1 article-title">{{ $article->subtitle }}</h2>
                </div>

                <div class="text-center d-flex justify-content-center gap-4 my-3 flex-wrap">
                    <p class="fs-5 mb-0">
                        Categoria: 
                        <a href="{{ route('article.byCategory', $article->category) }}" class="text-capitalize fw-bold text-muted">
                            {{ $article->category->name }}
                        </a>
                    </p>

                    <p class="fs-5 mb-0">
                        Redattore: 
                        <a href="{{ route('article.byUser', $article->user) }}" class="text-capitalize fw-bold text-muted">
                            {{ $article->user->name }}
                        </a>
                    </p>

                    <p class="fs-5 mb-0 text-muted">
                        Redatto il {{ $article->created_at->format('d/m/Y') }}
                    </p>
                </div>

                <hr>

                <p class="article-body">{{ $article->body }}</p>

                @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-evenly">
                                <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta l'articolo</button>
                                </form>

                                <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta l'articolo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif


        <p class="small text-muted my-0">
        @foreach ($article->tags as $tag)
            {{ $tag->name }}
        @endforeach
    </p>

                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="text-secondary">Vai alla lista degli articoli</a>
                </div>
            </div>
        </div>
    </div>
 <div class="bgcolor" style="padding-bottom: 500px;">
</x-main-layout>
