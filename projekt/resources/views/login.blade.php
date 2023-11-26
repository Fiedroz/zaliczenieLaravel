<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px;">
        <h2>Zaloguj się</h2>

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div>
                <label for="email">Adres Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Hasło</label>
                <input type="password" id="password" name="password" required>
            </div>

            @if ($errors->has('login'))
                <p>{{ $errors->first('login') }}</p>
            @endif

            <div>
                <button type="submit">Zaloguj się</button>
            </div>
        </form>
    </div>
@endsection
