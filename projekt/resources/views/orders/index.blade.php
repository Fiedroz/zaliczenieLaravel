<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="center" id="margin-users-list">Orders</h2>
                @foreach($orders as $order)
                <div class="card mb-3">
                    <div class="card-body" id="orders-margin">
                        <p class="card-title text-cta"><b style="color:#ffba00"> ID: </b>{{ $order->id }}</p>
                        <p class="card-text text-cta"><b style="color:#ffba00">User: </b>{{ $order->user->name }}</p>
                        <p class="card-text text-cta"><b style="color:#ffba00">Product IDs: </b>{{ $order->product_ids }}</p>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    @endsection
</body>
</html>
