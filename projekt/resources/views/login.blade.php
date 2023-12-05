<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Login</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="wrapper">
    <div>
        <h2 class="center" id="margin-users-list">Zaloguj się</h2>

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="center">
                <label for="email" class="text-cta">Adres Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"  class="input-field-add-product" required autofocus>
            </div>

            <div class="center">
                <label for="password" class="text-cta">Hasło</label>
                <input type="password" id="password" name="password" class="input-field-add-product" required>
            </div>

            @if ($errors->has('login'))
                <p>{{ $errors->first('login') }}</p>
            @endif

            <div class="center margin-top-25">
                <button type="submit" class="btn text-detail">Zaloguj się</button>
            </div>
        </form>
    </div>
</div>
@endsection
</body>
</html>

