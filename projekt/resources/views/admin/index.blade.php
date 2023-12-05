<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Users</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="wrapper">
    <h2 class="center" id="margin-users-list">Lista Użytkowników</h2>
        <div class="center" id="add-new-user">
            <a href="/admin/users/create" class="btn text-detail" >Dodaj nowego użytkownika</a>
        </div>

    <table class="table">
        <thead class="text-subtitle">
            <tr>
                <th>ID</th>
                <th>Imię i Nazwisko</th>
                <th>Email</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="text-cta">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="buttons">
                        <a href="/admin/users/{{ $user->id }}" class="btn btn-show">Pokaż</a>
                        <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-edit">Edytuj</a>
                        <div class="users-list-button-margin">
                            <form method="POST" action="/admin/users/{{ $user->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Usuń</button>
                            </form>
                        </td>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>
