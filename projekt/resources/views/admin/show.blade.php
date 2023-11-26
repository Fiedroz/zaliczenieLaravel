<!-- resources/views/admin/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Profil użytkownika</h1>

    <p>ID: {{ $user->id }}</p>
    <p>Imię i Nazwisko: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <a href="/admin/users">Powrót do listy użytkowników</a>
@endsection
