@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')

    <nav class="flex w-full py-4 items-center justify-between duration-500 bg-neutral-50 z-50 px-8">
        <a href="/"><img src="../assets/icons/Logo-Bakso.png" alt="Logo" class="h-12 w-auto"></a>
        <div class="flex items-center gap-8 pr-[100px]">
            <a class="text-base font-medium text-neutral-900 hover:text-primary-500 hover:duration-100" href="/admin/menu">Menu</a>
            <a class="text-base font-medium text-neutral-900 hover:text-primary-500 hover:duration-100" href="/admin/categories">Categories</a>
        </div>
        <a class="py-3 px-6 rounded-lg bg-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-primary-600 hover:duration-500" href="/admin/logout">Logout</a>
    </nav>

    <div class="bg-primary-50 bg-cover h-screen">
        <div class="flex flex-col items-center justify-center py-12">
            <h1 class="text-3xl font-bold">Hello, {{ auth()->user()->name }} 👋</h1>
        </div>
        
        <div class="flex flex-col items-center justify-center py-8">
            <table class="table-fixed text-center">
                <thead>
                  <tr>
                    <th class="border p-4 border-collapse border-primary-500 w-[200px] bg-primary-500">Transaction ID</th>
                    <th class="border p-4 border-collapse border-primary-500 w-[500px] bg-primary-500">Status</th>
                    <th class="w-[200px]"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        @if ($transaction->status == 'pending')
                        <tr>
                            <td class="border p-2  border-collapse border-primary-500">{{ $transaction->id }}</td>
                            <td class="border p-2 border-collapse border-primary-500">{{ $transaction->status }}</td>
                            <td class="p-2 px-4"><a class="text-base font-semibold" href="/admin/order/details/{{ $transaction->id }}">Details Order</a></td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
        </div>
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
