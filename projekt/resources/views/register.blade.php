<!-- resources/views/auth/register.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="text-align: center; margin-top: 50px;">
        <h2>Zarejestruj się</h2>

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <div>
                <label for="name">Imię i Nazwisko</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email">Adres Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Hasło</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Potwierdź Hasło</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit">Zarejestruj się</button>
            </div>
        </form>
    </div>
@endsection
