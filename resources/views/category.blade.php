@extends('layouts.main')

@section('container')
    <div class="my-custom-container mb-3 w-50 d-flex justify-content-start">
        <h1 class="m-2 px-2">{{ $category->category_name }}</h1>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/1200x400?{{ $item->category->category_name }}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->item_name }}</h5>
                            <p class="card-text" id="title-color">{{ $item->brand->brand_name }}</p>
                            <p class="card-text">{{ $item->price }}</p>
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