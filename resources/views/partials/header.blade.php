<header class="py-2 bg-dark">
    <div class="container d-flex justify-content-between">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <nav class="navbar">
            <ul class="navbar-nav flex-row ">
                <li class="nav-item me-4">
                    <a href="/" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a href="{{ route('comics.index') }}" class="nav-link text-light">Lista dei fumetti</a>
                </li>
                <li class="nav-item me-4">
                    <a href="{{ route('comics.create') }}" class="nav-link text-light">Aggiungi un fumetto</a>
                </li>
            </ul>
        </nav>
    </div>
</header>