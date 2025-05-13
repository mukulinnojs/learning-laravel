<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Learning Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('welcome')" aria-current="page"
                        href="{{ route('welcomepage') }}">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('home')" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('portfolio')" href="{{ route('portfoliopage') }}">Portfolio</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link @yield('bladesyntax')" href="{{ route('bladesyntax') }}">Blade Syntax</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link @yield('layouts')" href="{{ route('layoutspage') }}">Layouts</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link @yield('stack')" href="{{ route('stackpushpage') }}">Stack Push</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link @yield('login')" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>