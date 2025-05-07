@extends('layouts.bsdefault')

@section('pagetitle')
    Login
@endsection

@section('login')
    active
@endsection

@section('maincontent')

    <div class="w-50 ms-auto me-auto mt-5">
        <h1>Login</h1>

        <form action="{{ route('loginauth') }}" method="post">
            @csrf
            <div class='mb-3'>
                <label for='email' class='form-label'>Email address</label>
                <input type='email' class='form-control' id='email' name="email" placeholder="Enter your email"
                    aria-describedby='emailHelp'>
            </div>
            <div class='mb-3'>
                <label for='pass' class='form-label'>Password</label>
                <input type='password' class='form-control' id='pass' name="pass" placeholder="Enter your password">
            </div>
            <button type='submit' class='btn btn-primary'>Login</button>
        </form>
    </div>

@endsection