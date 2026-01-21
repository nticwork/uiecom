  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">FullStack Ecom</a>
    <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/produitsr/electromenager">Electroménager</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produitsr/hicking">Hicking</a>
        </li>

        @if(Auth::check())
            @if(Auth::user()->role === App\Models\User::ROLE_ADMIN)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create')}}">Ajouter un Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/espaceadmin">Gestion des Produits</a>
                </li>
            @elseif(Auth::user()->role ===App\Models\User::ROLE_USER)
                <li class="nav-item">
                    <a class="nav-link" href="/espaceclient">EspaceClient</a>
                </li>
            @endif
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST"
class="form-inline">
                    @csrf
                    <button type="submit" class="btn nav-link btnlink">Déconnexion</button>
                </form>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">SeConnecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register')}}">S'inscrire</a>
            </li>
        @endif
      </ul>
    </div>
</nav>
