@extends('layouts.main')

@section('container')

    <div class="text-center container mb-4">
        <h1>TOP 5 BRANDS</h1>
    </div>


    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($brands as $brand)
                <div class="col-xl-2 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/900x600?{{ $brand->brand_name }}" class="card-img-top" alt="image">
                        <div class="card-body text-center">
                            <h5 class="card-title" id="title-color">{{ $brand->brand_name }}</h5>
                            <a href="{{ route('brand.show', $brand->id) }}" class="btn btn-primary mt-2">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection