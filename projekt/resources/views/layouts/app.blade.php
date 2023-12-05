
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Sklep Internetowy</title>
</head>
<body>
<div class="wrapper">
    <nav class="text-subtitle">
        <ul>
            <li id="first"><a href="/" class="text-subtitle">Strona Główna</a></li>
            @auth
                {{-- <li><a href="/dashboard">Dashboard</a></li> --}}
                <li id="second"><a href="/cart">Cart</a></li>
                <li id="last"><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    @csrf
                </form>
                @if(auth()->user()->hasRole('administrator'))
                    <li id="third"><a href="/products">Products</a></li>
                    <li id="forth"><a href="/users">Users</a></li>
                    <li id="fiveth"><a href="/orders">Orders</a></li>
                @endif
                @if(auth()->user()->hasRole('moderator'))
                    <li id="third"><a href="/products">Products</a></li>
                    <li id="fiveth"><a href="/orders">Orders</a></li>
                @endif
            @else
                <li id="second"><a href="/login">Login</a></li>
                <li id="third"><a href="/register">Register</a></li>
            @endauth
        </ul>
    </nav>
</div>

    <div>
        @yield('content')
    </div>
</body>
</html>
