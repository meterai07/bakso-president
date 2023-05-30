<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\OrderMenu;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderMenuRequest;
use App\Http\Requests\UpdateOrderMenuRequest;

class OrderMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $menus = Menu::all();
        return view('order.order', [
            'menus' => Menu::all(),
            'categories' => Category::has('menu')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction, OrderMenu $orderMenu)
    {
        // dd($orderMenu);
        // $orderMenu = OrderMenu
        $orderMenu = OrderMenu::where('transaction_id', $transaction->id)->get();
        // foreach ($orderMenu as $order) {
        //     $menu = Menu::where('id', $order->menu_id)->get();
        // }
        // dd($menu);
        
        // $menu = Menu::where('id', $orderMenu->menu_id)->get();
        return view('dashboard.transactions.order-menu-details', [
            'orderMenu' => $orderMenu,
            // 'transaction' => $transaction,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderMenu $orderMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderMenuRequest $request, OrderMenu $orderMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderMenu $orderMenu)
    {
        //
    }
}
