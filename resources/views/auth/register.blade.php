
 <x-main-layout>

  <x-slot:title>Registrati</x-slot:title>

  <div class="container-fluid min-vh-100 d-flex flex-column justify-content-center align-items-center bg-gradient" 
       style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    
    <div class="text-center mb-5 mt-5">
      <h1 class="display-1 fw-bold text-white text-shadow">Registrati</h1>
    </div>

    <div class="card p-5 shadow-lg rounded-4" style="max-width: 420px; width: 100%; background-color: rgba(255,255,255,0.95);">
      <form action="{{ route('register') }}" method="POST" novalidate>
        @csrf
        
        <div class="mb-4">
          <label for="name" class="form-label fw-semibold">Nome utente</label>
          <input 
            type="text" 
            class="form-control form-control-lg @error('name') is-invalid @enderror" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            placeholder="Il tuo nome utente"
            autofocus
          >
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input 
            type="email" 
            class="form-control form-control-lg @error('email') is-invalid @enderror" 
            id="email" 
            name="email" 
            value="{{ old('email') }}" 
            placeholder="esempio@email.com"
          >
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="mb-4">
          <label for="password" class="form-label fw-semibold">Password</label>
          <input 
            type="password" 
            class="form-control form-control-lg @error('password') is-invalid @enderror" 
            id="password" 
            name="password" 
            placeholder="••••••••"
          >
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="form-label fw-semibold">Conferma password</label>
          <input 
            type="password" 
            class="form-control form-control-lg" 
            id="password_confirmation" 
            name="password_confirmation" 
            placeholder="••••••••"
          >
        </div>

        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary btn-lg shadow-sm">
            Registrati
          </button>
        </div>

        <p class="text-center text-muted">
          Sei già registrato? 
          <a href="{{ route('login') }}" class="text-primary fw-semibold text-decoration-none">Accedi qui</a>
        </p>

      </form>
    </div>

  </div>
  
  <div class="bgcolor" style="padding-bottom: 800px;"></div>

</x-main-layout>

