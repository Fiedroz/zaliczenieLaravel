<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card center">
                    <div class="card-header text-title center">Edit User</div>
                    
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="name" class="text-cta">Name</label>
                                <input type="text" class="form-control input-field-add-product" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="text-cta">Email</label>
                                <input type="email" class="form-control input-field-add-product" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="role" class="text-cta">Role</label>
                                <select class="form-control input-field-add-product" id="role" name="role" required>
                                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                    <option value="moderator" {{ $user->role === 'moderator' ? 'selected' : '' }}>Moderator</option>
                                    <option value="administrator" {{ $user->role === 'administrator' ? 'selected' : '' }}>Administrator</option>
                                </select>
                            </div>
                            <div class="center">
                                <button type="submit" class="btn btn-primary text-detail margin-top-25">Update User</button>
                            </div>
                            
                        </form>
                        <div class="center">
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger text-detail margin-top-25">Delete User</button>
                            </form>
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
