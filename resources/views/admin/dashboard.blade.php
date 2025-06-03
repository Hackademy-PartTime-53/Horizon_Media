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
  <h2>Tutti i Tags </h2>
  <x-metainfo-table : metainfos = " $tags " metaType = "tags" />
</div>
</div>
</div>

<div class="container my-5 ">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2> Tutte le categorie </h2>
            <x-metainfo-table : metaInfos = " $categories " metaType = "categorie" />
        </div>
    </div>
</div>
</x-main-layout>