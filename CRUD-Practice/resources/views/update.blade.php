@extends('layouts.bstemplate')

@section('pagetitle')
    Update Operation
@endsection

@vite('resources/css/insert.css')

@section('navupdate')
    active
@endsection

@section('maincontent')
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="{{route('editproduct')}}" method="post" class="product-form ms-auto me-auto">
            {{-- Product Title --}}
            @csrf
            <input type="hidden" value="{{$id}}" name="id">
            <div class="mb-2">
                <label for="title" class="form-label">Product Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                    placeholder="Enter the title of your product" value="">
            </div>


            {{-- Product Price --}}
            <div class="mb-2">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp"
                    placeholder="Enter the price for your product">
            </div>

            {{-- Product Image URL--}}
            <div class="mb-2">
                <label for="image" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp"
                    placeholder="Enter the Image URL for your product">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@endsection