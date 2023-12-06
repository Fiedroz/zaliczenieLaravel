<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header product-list text-title">{{ __('Product List') }}</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead class="text-subtitle">
                                <tr>
                                    <th style="color:#ffba00">ID</th>
                                    <th style="color:#ffba00">Name</th>
                                    <th style="color:#ffba00">Price</th>
                                    <th style="color:#ffba00">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-cta">
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td class="buttons">
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-edit">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"  style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Are you   sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-cta">No products found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="add-product-container">
                            <a href="{{ route('products.create') }}" class="btn btn-success btn-add-product text-detail">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
