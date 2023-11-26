
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep Internetowy</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Strona Główna</a></li>
            @auth
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
                @if(auth()->user()->hasRole('administrator'))
                    <li><a href="/products">Products</a></li>
                    <li><a href="/users">Users</a></li>
                    <li><a href="/orders">Orders</a></li>
                @endif
                @if(auth()->user()->hasRole('moderator'))
                    <li><a href="/products">Products</a></li>
                    <li><a href="/orders">Orders</a></li>
                @endif
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            @endauth
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
