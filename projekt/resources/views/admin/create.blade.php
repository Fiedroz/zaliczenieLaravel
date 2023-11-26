<!-- resources/views/admin/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj nowego użytkownika</h1>

    <form method="POST" action="/admin/users">
        @csrf
        <label for="name">Imię i Nazwisko:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Hasło:</label>
        <input type="password" name="password" required>

        <button type="submit">Dodaj użytkownika</button>
    </form>

    <a href="/admin/users">Powrót do listy użytkowników</a>
@endsection
