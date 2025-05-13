@php
    $cars = ['Brezza', "Mustang", "Alto", "Porsche"];
@endphp

@extends('layouts.bsdefault')

@section('pagetitle')
    Layouts
@endsection

@section('layouts')
    active
@endsection

@section('maincontent')
    {{-- Passing Params in inlcude --}}
    @include('layouts.templates', ["name" => 'Mukul', "role" => "Laravel", "cars" => $cars])

@endsection