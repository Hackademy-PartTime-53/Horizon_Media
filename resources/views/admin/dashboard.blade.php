<x-main-layout>
<x-slot:title>Richieste</x-slot:title>


    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif


    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Amministratore {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
<div class="container my-5">
<div class = "row justify-content-center">
<div class = "col-12">
  <div class="container">
<div class="d-flex justify-content-between">
    <h2>Tutti i Tags</h2>
    <form action="{{ route('admin.storeTag') }}" method="POST" class="w-50 d-flex m-3">
        @csrf
        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuovo Tag">
        <button type="submit" class="btn btn-outline-secondary">Inserisci</button>
    </form>
    
</div>
  <x-metainfo-table :metaInfos="$tags" metaType="tags" />
</div>
</div>
</div>

<div class="container mt-5">
<div class="d-flex justify-content-between">
    <h2>Tutte le categorie</h2>
    <form action="{{ route('admin.storeCategory') }}" method="POST" class="w-50 d-flex m-3">
        @csrf
        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
        <button type="submit" class="btn btn-outline-secondary">Inserisci</button>
    </form>
    
</div>
<x-metainfo-table :metaInfos="$categories" metaType="categorie"/>
</div>

 <div class="bgcolor" style="padding-bottom: 800px;">
</x-main-layout>