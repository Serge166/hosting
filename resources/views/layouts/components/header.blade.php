<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="regna/img/logo2.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        {{-- <h6><a href="#hero">Immonivo</a></h6> --}}
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#about">Accueil</a></li>
          @if(Auth::check())
            <li><a href="#services">Nos services et produits</a></li>
            {{-- <li><a href="#portfolio">Nos maquettes</a></li> --}}            
            <li><a href="{{ route('cart.index')}} ">Votre panier</a></li>            
          @else
          <li><a href="#team">Nos partenaires</a></li>
          <li><a href="#contact">Contactez-nous</a></li>    
          @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>