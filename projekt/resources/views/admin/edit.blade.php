@extends('layouts.app')

@section('content')
    <h1>Edytuj użytkownika</h1>

    <form method="POST" action="/admin/users/{{ $user->id }}">
        @csrf
        @method('PUT')

        <label for="name">Imię i Nazwisko:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <button type="submit">Zapisz zmiany</button>
    </form>

    <a href="/admin/users">Powrót do listy użytkowników</a>
@endsection