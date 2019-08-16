<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('post.index')}}">Les articles <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.create')}}">Ajouter</a>
            </li>

            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.dashboard',[ auth()->user(), auth()->user()->name])}}">Mon espace</a>
            </li>
                @endif
        </ul>
    </div>
    <div class="home-user">
        @if (Auth::check())
            <em>{{Auth::user()->email}}</em>
            <a class="btn btn-danger" href="{{route ('logout')}}">Se déconnecter</a>
        @else
            <a class="btn btn-success" href="{{route('login')}}">Se connecter</a>
        @endif
    </div>
</nav>
