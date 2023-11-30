@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Orders</h2>
            @foreach($orders as $order)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                        <p class="card-text">User: {{ $order->user->name }}</p>
                        <p class="card-text">Product IDs: {{ $order->product_ids }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection