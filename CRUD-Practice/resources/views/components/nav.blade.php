<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="{{route("insertpage")}}">CRUD OPERATIONS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('navread')" aria-current="page"
                            href="{{route('fetchproducts')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navinsert')" aria-current="page" href="{{route('insertpage')}}">Add
                            Products</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link @yield('navdelete')" href="{{route('deletepage')}}">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('navupdate')" href="{{route('updatepage')}}">Update</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>