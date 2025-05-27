<x-main-layout>
<x-slot:title>Home</x-slot:title>

@if (session('alert'))
<div class="alert alert-danger" > {{ session ('alert') }} </div>
@endif

<div class="bgcolor" style=" padding-bottom: 800px;">
{{-- Hero con carousel --}}
  <x-hero-section 
     :articles="$articles" />
     <x-carousel :articles="$articles" />

 <h2 class="text-center mt-5 "> Le News </h2>

@if(session('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
@endif
</div>

<div style="height: 120px;"></div>


</x-main-layout>