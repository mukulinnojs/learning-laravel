<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')

    <h1 class="text-primary mb-3">Welcome, {{$data->fname}}</h1>
    <div class="row ms-auto me-auto mt-5 d-flex justify-content-center align-items-center">

        <div class="col-4">
            <h1 class="text-primary mb-3">Edit Details</h1>
            <form action="{{ route('user.update') }}" method="post" class="border p-4 border-dark rounded-2">

                @csrf
                <input type="hidden" value="{{$data->id}}" name="id">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input value="{{$data->fname}}" type="text" class="form-control" id="fname" name="fname"
                        placeholder="Enter your First Name">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input value="{{$data->lname}}" type="text" class="form-control" id="lname" name="lname"
                        placeholder="Enter your Last Name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="{{$data->email}}" type="email" class="form-control" id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Enter your Email Address">
                </div>
                <button type="submit" class="btn btn-primary">Update Info</button>
            </form>
        </div>

        {{-- Change Password Form --}}
        <div class="col-4">
            <h1 class="text-primary mb-3">Change Password</h1>

            <form action="{{ route('user.update.password') }}" method="post" class="border p-4 border-dark rounded-2">

                @csrf
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="current_password" id="current_password"
                        placeholder="Enter Current Password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter New Password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm New Password">
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>

    <div class="col-8 py-4 px-2 ms-auto me-auto">
        <a href="" class="btn btn-danger">Delete My Account</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>