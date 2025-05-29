@extends('layouts.bstemplate')

@section('pagetitle')
    Read Operation
@endsection

@vite('resources/css/read.css')
@section('navread')
    active
@endsection

@section('maincontent')
    <div class="product-grid">
        @foreach ($data as $product)
            <div class="card">
                <img src="{{$product->imgurl}}" alt="{{ $product->title }}">
                <h5 class="">{{$product->title}}</h5>
                <h6 class="text-warning"> ₹ {{$product->price}}</h6>
                <a class="btn btn-primary" href="{{ route('updatepage', ['id' => $product->id]) }}">Edit Product</a>
                <a class="btn btn-danger" href="{{route('deleteproduct', ['id' => $product->id])}}">Delete Product</a>
                {{-- <a class="btn btn-danger" href="{{ route('deleteProduct', ['id' => $product->id]) }}">Delete Product</a>
                --}}
            </div>
        @endforeach
    </div>
@endsection