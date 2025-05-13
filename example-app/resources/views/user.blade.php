@extends('layouts.bsdefault')

@section('pagetitle')
    Route Parameters To View
@endsection

@section('stack')
    active
@endsection

@section('maincontent')
    <h4>Login Successful</h4>
    <h1>Welcome {{$email}}</h1>
    <h1>Pass: {{$pass}}</h1>
@endsection