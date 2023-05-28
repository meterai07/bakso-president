<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Update</title>
</head>
<body>
    <h1>Halaman Update</h1>
    <form action="/admin/menu/update/{{ $menu->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nama Menu" value="{{ $menu->name }}">
        <input type="text" name="description" id="description" placeholder="Deskripsi Menu" value="{{ $menu->description }}">
        <input type="number" name="price" id="price" placeholder="Harga Menu" value="{{ $menu->price }}">
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="200">
        <input type="file" name="image" id="image" placeholder="Gambar Menu">
        <button type="submit">Update Menu</button>
    </form>
</body>
</html>