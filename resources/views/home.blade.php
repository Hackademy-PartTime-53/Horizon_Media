<x-main-layout>
<x-slot:title>Home</x-slot:title>


{{-- Hero con carousel --}}
  <x-hero-section 
     :articles="$articles" />
     <x-carousel :articles="$articles" />


@if(session('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
@endif





</x-main-layout>