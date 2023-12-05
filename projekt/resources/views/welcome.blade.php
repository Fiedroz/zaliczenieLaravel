<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bajdalski Bień Dorabiała Fiedorow - Sklep</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row center">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="center"><p class="card-title text-cta bold">{{ $product->name }}</p></div>
                            <div class="center"><p class="card-text text-body">Price: ${{ $product->price }}</p></div>
                            <div class="center"><form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Add to Cart</button>
                            </form></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
</body>
</html>
