@extends('dashboard.layouts.main', ['page' => 'dashboard'])

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col items-center justify-center gap-12 mt-12">
        <h1 class="text-4xl font-lora font-bold">List Pesanan</h1>
        <table class="table-fixed text-center">
            <thead>
                <tr>
                <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500 text-primary-50">Transaction ID</th>
                <th class="border p-4 border-collapse border-primary-500 w-[500px] bg-primary-500 text-primary-50">Status</th>
                <th class="w-[144px]"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    @if ($transaction->status == 'menunggu dibuat')
                    <tr>
                        <td class="border p-2  border-collapse border-primary-500">{{ $transaction->id }}</td>
                        <td class="border p-2 border-collapse border-primary-500">{{ $transaction->status }}</td>
                        <td class="p-2 px-4"><a class="text-base font-semibold text-primary-500 hover:text-primary-300 hover:duration-300" href="/admin/order/details/{{ $transaction->id }}">Detail Order</a></td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
            </table>
    </div>

    
    
    
<!-- 
    @foreach($transactions as $transaction)
        @if ($transaction->status == 'pending')
            <h1>transaksi id = {{ $transaction->id }} | {{ $transaction->status }} | <a href="/admin/order/details/{{ $transaction->id }}">Details Order</a></h1>
        @endif
        {{-- <h1>transaksi id = {{ $transaction->id }} || {{ $transaction->status }} | <a href="/admin/order/update/{{ $transaction->id }}">Selesai</a> || <a href="/admin/order/details/{{ $transaction->id }}">Details Order</a></h1> --}}
        {{-- <h1>{{ $transaction->user->name }}</h1> --}}
        {{-- <p>{{ $transaction->menu->name }}</p>
        <p>{{ $transaction->quantity }}</p>
        <p>{{ $transaction->total }}</p>
        <p>{{ $transaction->status }}</p> --}}
    @endforeach -->
@endsection
