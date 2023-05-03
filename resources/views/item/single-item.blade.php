@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-evenly mt-4 mb-5">
        
        <img src="https://source.unsplash.com/800x400?{{ $item->item_name }}" class="w-50 p-3" alt="image">

        <div class="p-3 justify-content-center">
            <h1>{{ $item->item_name }}</h1>
            <h3 id="title-color">{{ $item->brand->brand_name }}</h3>
            <h3>Rp. {{ $item->price }}/piece</h3>
            <p>Description: </p>
            <p>{{ $item->description }}</p>
        </div>
    </div>
@endsection