<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Order Details</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="bg-primary-50 bg-cover h-screen">
        <div class="flex flex-row gap-4">
            <a href="/admin/dashboard">kembali ke dashboard</a>
        </div>
        <div class="flex flex-col justify-center">
            <div class="flex flex-col items-center justify-center pt-16">
                <h1 class="text-xl font-bold">Admin Order Details</h1>
                <h1 class="text-xl font-bold">Transaction ID = {{ $transaction->id }}</h1>
            </div>
            <div>
                <div class="flex flex-col items-center justify-center py-8 gap-8">
                    <table class="table-fixed text-center">
                        <thead>
                        <tr>
                            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Jenis</th>
                            <th class="border p-4 border-collapse border-primary-500 w-[500px] bg-primary-500 text-primary-50">Jumlah</th>
                            <th class="border p-4 border-collapse border-primary-500 w-[500px] bg-primary-500 text-primary-50">Harga</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;    
                            @endphp
                            @foreach($menus as $menu)
                            <tr>
                                <td class="border p-2  border-collapse border-primary-500">{{ $menu->name }}</td>
                                @foreach($orderMenu as $order)
                                    @if($order->menu_id == $menu->id)
                                <td class="border p-2 border-collapse border-primary-500">{{ $order->quantity }}</td>
                                <td class="border p-2 border-collapse border-primary-500">Rp {{ $order->quantity * $menu->price }}</td>
                                        @php
                                            $total += $order->quantity * $menu->price;
                                        @endphp
                                    @endif
                                @endforeach 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  <table>
                    <thead>
                        <tr>
                            <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Total Harga</th>
                            <th class="border p-4 border-collapse border-primary-500 w-[200px]">Rp {{ $total }}</th>
                        </tr>
                    </thead>
                  </table>
                  <a class="py-3 px-6 rounded-lg bg-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-primary-600 hover:duration-500" href="/admin/order/update/{{ $transaction->id }}">Selesai</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>