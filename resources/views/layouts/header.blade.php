<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-white">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Vagas Alpha Code_</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('candidates.index')}}">Candidatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('jobs.index')}}">Vagas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('candidates.applications')}}">Candidatar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
