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
    <h1>Halaman Menus</h1>
    <a href="/admin/menu/create">Tambah Menu</a>

    @if(session('success'))
    <div class="flex items-center justify-center w-full p-4 mb-4 text-green-500 bg-green-100 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    @foreach ($menus as $menu)
        <h1>{{ $menu->name }}</h1>
        <p>{{ $menu->description }}</p>
        <p>{{ $menu->price }}</p>
        <p>{{ $menu->image }}</p> 
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
    @endforeach
</body>
</html>