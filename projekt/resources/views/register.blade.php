<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="wrapper">
    <div>
        <h2 class="center" id="margin-users-list">Zarejestruj się</h2>

        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <div class="center">
                <label for="name" class="text-cta">Imię i Nazwisko</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="input-field-add-product" required autofocus>
            </div>

            <div class="center">
                <label for="email" class="text-cta">Adres Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="input-field-add-product" required>
            </div>

            <div class="center">
                <label for="password" class="text-cta">Hasło</label>
                <input type="password" id="password" name="password" class="input-field-add-product" required>
            </div>

            <div class="center">
                <label for="password_confirmation" class="text-cta">Potwierdź Hasło</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="input-field-add-product" required>
            </div>

            <div class="center">
                <button type="submit" class="btn text-detail">Zarejestruj się</button>
            </div>
        </form>
    </div>
</div>
@endsection
</body>
</html>

