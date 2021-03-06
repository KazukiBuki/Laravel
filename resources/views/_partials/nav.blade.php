<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="na-link px-lp-3 py-3 py-lg-4" href="/">Pradinis</a></li>
                        @if (Auth::check())
                        <li class="nav-item"><a class="na-link px-lp-3 py-3 py-lg-4" href="/logout">Logout</a></li>
                        <li class="nav-item"><a class="na-link px-lp-3 py-3 py-lg-4" href="/new-category">New category</a></li>
                        @else
                        <li class="nav-item"><a class="na-link px-lp-3 py-3 py-lg-4" href="/login">Login</a></li>
                        <li class="nav-item"><a class="na-link px-lp-3 py-3 py-lg-4" href="/register">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>