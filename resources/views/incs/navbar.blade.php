<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            Acceuil
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{('artist')}}">Artiste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('locality')}}">Localités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('type')}}">Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('role')}}">Rôles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('location')}}">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('show')}}">Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{('representation')}}">Representations</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                @if(Auth::user())
                    @if(Auth::user()->role === 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link" href="#">Espace Admin</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn">Déconnexion</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Me connecter</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
