@extends('layouts.bsdefault')

@section('pagetitle')
    Portfolio
@endsection
@section('portfolio')
    active
@endsection
@section('maincontent')
    <h1>This is the portfolio page</h1>
    <!-- We Used Route Prefix grouping here -->
    <div class="d-flex gap-1">

        <a href="{{ route('companypage') }}" class="btn btn-primary text-purple-500 underline">Visit Our Company Page</a>
        <br>
        <a href="{{ route('orgpage') }}" class="btn btn-success text-purple-500 underline">Visit Our Organization Page</a>
    </div>
@endsection