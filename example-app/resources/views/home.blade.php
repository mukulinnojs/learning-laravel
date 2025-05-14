@extends('layouts.bsdefault')

@section('pagetitle')
    Homepage
@endsection
@section('home')
    active
@endsection
@section('maincontent')

    <h1>This is the homepage</h1>
    <a href="{{ url('/') }}" class="underline">Visit Welcome Page</a>
    <br>
    <a href="{{ url('/portfolio/Mukul/Dogra') }}" class="underline">Mukul's Portfolio</a>
    <br>
    <a href="{{ url('/portfolio/Akash/Nath') }}" class="underline">Akash's Portfolio</a>
    <br>
    <br>
    <br>
    <a href="{{ route('testpage') }}" class="underline">Named Routes Test</a>
    <br>
    <a href="{{ route('hellopage') }}" class="underline">Hello Page {{$name}}</a>

@endsection