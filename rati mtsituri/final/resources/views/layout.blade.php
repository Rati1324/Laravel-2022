<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href={{route('view')}}>View</a>
        <a href={{route('insert')}}>Insert</a>
        <a href={{route('edit')}}>Edit</a>
    </nav>

    @yield('content_inner')
</body>
</html>