@extends('layouts.user')
@section('content')
    {{-- Home start --}}
    <div class="row m-0 bg-dark-subtle vh-100" style="padding-top: 41px;">
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center z-1 order-1 order-lg-0">
            <div class="w-75">
                <h1>MyShoes Collection</h1>
                <p>This is a test site. Nevertheless, you are invited to explore all the features commonly found on typical e-commerce websites.</p>
                <a href="#products" class="btn btn-outline-dark">Explore <i class="fa-solid fa-circle-right"></i></a>
            </div>
        </div>
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center p-0 order-0 order-lg-1">
            <img src="{{ asset('img/shoes.png') }}" alt="" width="300px" height="400px" class="scale-in d-md-inline d-none">
            <img src="{{ asset('img/shoes.png') }}" alt="" width="200px" height="300px" class="scale-in d-md-none d-inline">
        </div>
    </div>
    {{-- Home end --}}

    {{-- Product start --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="p-0"><path fill="#ced4da" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,69.3C384,75,480,117,576,149.3C672,181,768,203,864,213.3C960,224,1056,224,1152,202.7C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="min-vh-100 bg-white d-flex flex-column align-items-center" id="products">
        <h1>Products</h1>
        <div class="row container justify-content-center">
            @foreach ($products as $product)
                <a href="{{ url('detail/'.$product->id) }}" class="card m-2 text-decoration-none p-0 border-0 shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('img/'.$product->image_path) }}" class="card-img-top object-fit-cover" height="200px" alt="...">
                    <div class="card-body">
                    <h5 class="card-title m-0 p-0">{{ $product->name }}</h5>
                    <h5 class="card-title m-0 p-0">${{ $product->price }}</h5>
                    <p class="card-text m-0 p-0">{{ $product->categories->name }}'s Shoes</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    {{-- Product end --}}
@endsection