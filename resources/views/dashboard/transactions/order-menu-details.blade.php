<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Order Details</title>
</head>
<body>
    <a href="/admin/dashboard">kembali ke dashboard</a>
    <h1>Admin Order Details</h1>
    @foreach($orderMenu as $order)
        <h2>{{ $order }}</h2>
    @endforeach
</body>
</html>