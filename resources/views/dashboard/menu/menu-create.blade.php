<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Create</title>
</head>
<body>
    <form action="/admin/menu/create" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nama Menu">
        <input type="text" name="description" id="description" placeholder="Deskripsi Menu">
        <input type="number" name="price" id="price" placeholder="Harga Menu">
        <input type="file" name="image" id="image" placeholder="Gambar Menu">
        <button type="submit">Tambah Menu</button>
    </form>
</body>
</html>