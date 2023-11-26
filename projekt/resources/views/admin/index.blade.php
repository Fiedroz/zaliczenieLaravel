<!-- resources/views/admin/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista Użytkowników</h1>

    <a href="/admin/users/create">Dodaj nowego użytkownika</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię i Nazwisko</th>
                <th>Email</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="/admin/users/{{ $user->id }}">Pokaż</a>
                        <a href="/admin/users/{{ $user->id }}/edit">Edytuj</a>
                        <form method="POST" action="/admin/users/{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
