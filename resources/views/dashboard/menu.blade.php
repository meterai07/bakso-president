<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Menus</title>
</head>
<body>
    <a href="/admin/dashboard">kembali</a>
    {{-- nanti disini ada menu crud, upload image, dan lain-lain --}}
    @foreach ($menus as $menu)
        <h1>{{ $menu->name }}</h1>
        <p>{{ $menu->description }}</p>
        <p>{{ $menu->price }}</p>
        <p>{{ $menu->image }}</p>   
    @endforeach
</body>
</html>