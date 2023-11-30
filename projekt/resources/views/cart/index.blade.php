

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Shopping Cart</h2>
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @forelse($cartProducts as $product)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                    </div>
                </div>
            @empty
                <p>No items in the cart.</p>
            @endforelse

            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection
