<x-main-layout>

<x-slot:title>Home</x-slot:title>
<h1>ciao</h1>
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

<x.shared-card />

</x-main-layout>