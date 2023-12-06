@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>

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
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" id="role" name="role" required>
                                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                    <option value="moderator" {{ $user->role === 'moderator' ? 'selected' : '' }}>Moderator</option>
                                    <option value="administrator" {{ $user->role === 'administrator' ? 'selected' : '' }}>Administrator</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update User</button>

                        </form>
                        <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')

                                 <button type="submit" class="btn btn-danger">Delete User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection