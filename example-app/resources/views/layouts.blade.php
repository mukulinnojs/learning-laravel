@php
    $cars = ['Brezza', "Mustang", "Alto", "Porsche"];
    // $sports = ['1' => "Volleyball", '2' => "Hockey"];
    $sports = [];
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
    @include('layouts.templates', ["name" => 'Mukul', "role" => "Laravel", "cars" => $cars, "sport" => $sports])


    {{-- Include If view exists --}}
    @includeIf('layouts.contact') {{-- This view does not exist but the page still works --}}

    {{-- Conditional Include --}}

    @includeWhen(false, 'components.conditionalincl', ['one' => "Mango"])

    {{-- Works opposite of includeWhen --}}
    @includeUnless(false, 'components.includeunless')

@endsection