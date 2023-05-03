@extends('layouts.main')

@section('container')
    <div class="container d-flex justify-content-between">
        
        <img src="https://source.unsplash.com/800x400?{{ $brand->brand_name }}" class="w-50 p-3" alt="image">
        <div class="p-3">
            <h1 id="title-color">{{ $brand->brand_name }}</h1>
            <p>Address: Palmerah - Indonesia</p>
            <p>Email: {{ $brand->brand_name }}@binus.ac.id</p>
            <p>Description: </p>
            <p>{{ $brand->description }}</p>
        </div>
    </div>

    <div class="container mt-4 mb-5">
        <div class="container">
            <h2 id="title-color">{{ $brand->brand_name }}'s Item</h2>
        </div>

        <div class="d-flex justify-content-evenly">
            @foreach ($items as $item)
                <div class="col-m-2 container">
                    <div class="card">
                        <img src="https://source.unsplash.com/900x600?{{ $brand->brand_name }}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->item_name  }}</h5>
                            <p class="card-text" id="title-color">{{ $item->brand->brand_name }}</p>
                            <p class="card-text">Rp. {{ $item->price }}</p>
                            <a href="{{ route('item.show', $item->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-end">
        {{ $items->links() }}
    </div>
@endsection