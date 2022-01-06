<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('login') }}">Log in</a>
    </nav>
    @yield('content_inner')
</body>
</html>