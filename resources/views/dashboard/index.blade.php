<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Berhasil Masuk</h1>
    <p>Hello, {{ auth()->user()->name }}</p>

    <a href="/admin/menu">Menu</a>

    <a href="/admin/logout">Logout</a>
</body>
</html>
