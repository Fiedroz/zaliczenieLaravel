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


    <table class="table">
        <thead class="text-subtitle">
            <tr>
                <th style="color:#ffba00">ID</th>
                <th style="color:#ffba00">Imię i Nazwisko</th>
                <th style="color:#ffba00">Email</th>
                <th style="color:#ffba00">Akcje</th>
            </tr>
        </thead>
        <tbody class="text-cta">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="buttons">
                        <a href="{{ url('/users/edit', $user->id) }}" class="btn btn-edit">Edytuj</a>
                        <div class="users-list-button-margin">
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
