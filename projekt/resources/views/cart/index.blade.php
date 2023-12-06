<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container center">
        <div class="row">
            <div class="col-md-12">
                <h2>Shopping Cart</h2>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @forelse($cartProducts as $product)
                    <div class="card mb-3 center">
                        <div class="card-body">
                            <h5 class="card-title text-cta bold" style="color:#ffba00">{{ $product->name }}</h5>
                            <p class="card-text text-body">Price: ${{ $product->price }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-cta center">No items in the cart.</p>
                @endforelse
            <div class="center">
                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary checkout">Checkout</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>


