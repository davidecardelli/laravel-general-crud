<header class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase text-white fw-bold p-2" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Magicthegathering-logo.svg/2560px-Magicthegathering-logo.svg.png"
                        class="img-fluid" alt="Logo Magic" style="height:50px">
                </a>

                <button class="navbar-toggler p-2 bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon color-white"></span>
                </button>

                <div class="collapse navbar-collapse flex-grow-0 p-2" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-white fw-bold" aria-current="page"
                                href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-white fw-bold" aria-current="page"
                                href="{{ route('cards.index') }}">Magic Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-white fw-bold" aria-current="page"
                                href="{{ route('about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-white fw-bold" aria-current="page"
                                href="{{ route('contact_us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase text-white fw-bold" aria-current="page"
                                href="{{ route('privacy_policy') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
