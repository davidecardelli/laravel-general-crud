<header>
    <nav class="navbar navbar-expand-lg bg-primary mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('cards.index') }}">MAGIC CARDS</a>
                    </li>
            </div>
        </div>
    </nav>
</header>
