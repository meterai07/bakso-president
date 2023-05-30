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
    <h1>Transaction ID = {{ $transaction->id }}</h1>
    @php
        $total = 0;    
    @endphp
    @foreach($menus as $menu)
        <h1>{{ $menu->name }} | 
            @foreach($orderMenu as $order)
                @if($order->menu_id == $menu->id)
                    {{ $order->quantity }} | {{ $order->quantity * $menu->price }}
                    @php
                        $total += $order->quantity * $menu->price;
                    @endphp
                @endif
            @endforeach 
        </h1>
    @endforeach
    <h1>Total = {{ $total }}</h1>
    <a href="/admin/order/update/{{ $transaction->id }}">Selesai</a>
</body>
</html>