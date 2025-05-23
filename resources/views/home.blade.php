<x-main-layout>
<x-slot:title>Home</x-slot:title>
{{-- Hero con carousel --}}
  <x-hero-section 
     :articles="$articles"
     backgroundImage="{{ asset('storage/images/horizon_cover.jpg') }}" 
  />


@if(session('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
@endif


<div class="container-fluid p-5 bg-secondary-subtle text-center">
<div class="row justify-content-center">
<div class="col-12">
<h1 class="display-1"> Horizon Media </h1>
</div>
</div>
</div>

<x-shared.card  :articles="$articles"/>

</x-main-layout>