

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Details') }}</div>

                <div class="card-body">
                    <p><strong>ID:</strong> {{ $product->id }}</p>
                    <p><strong>Name:</strong> {{ $product->name }}</p>
                    <p><strong>Price:</strong> {{ $product->price }}</p>

                    <a href="{{ route('products.index') }}">Back to Products List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
