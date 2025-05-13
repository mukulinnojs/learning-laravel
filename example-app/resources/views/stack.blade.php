@extends('layouts.bsdefault')

@section('pagetitle')
    Stack Push Directive
@endsection

@section('stack')
    active
@endsection

@section('maincontent')
    <h1>This is the Stack Push Directive page</h1>
@endsection

@push('js')
    <script src="js/stack.js"></script>
    {{-- @vite('js/stack.js') --}}
@endpush