@use('Illuminate\Support\Facades\Auth')

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Authentication Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                @if(Auth::guest())
                    <li class="nav-item">
                        <a class="btn btn-success" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{route('signup')}}">Sign Up</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-danger" href="{{route('user.logout')}}">Logout</a>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>