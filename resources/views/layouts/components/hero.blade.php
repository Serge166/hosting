

<section id="hero">
    <div class="hero-container">
    @if(Auth::check())
        <h1>{{ Auth::user()->name }}, Bienvenue chez Immonivo</h1>
        <h2>L'agence qui répond à vos ambitions!</h2>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Déconnectez-vous</button>
        </form>        
    @else
    <h1>Bienvenue chez Immonivo</h1>
        <a href="{{ route('login') }}" class="btn-get-started">Connectez-vous</a>
    @endif
  </section>