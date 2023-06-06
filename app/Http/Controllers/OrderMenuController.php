<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\OrderMenu;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request)
    {
        DB::transaction(function () {
            Transaction::create([
                'status' => 'menunggu dibuat',
            ]);

            $transaction = Transaction::latest()->first();

            foreach (request()->except('_token') as $id => $quantity) {
                if ($quantity != null) {
                    OrderMenu::create([
                        'transaction_id' => $transaction->id,
                        'menu_id' => $id,
                        'quantity' => $quantity,
                    ]);
                }
            }
        });

        return redirect('/order')->with('success', 'Order has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction, OrderMenu $orderMenu)
    {
        $orderMenu = OrderMenu::where('transaction_id', $transaction->id)->get();
        $menus = OrderMenu::where('transaction_id', $transaction->id)->get()->map(function ($orderMenu) {
            return $orderMenu->menu;
        });

        return view('dashboard.transactions.order-menu-details', [
            'transaction' => $transaction,
            'orderMenu' => $orderMenu,
            'menus' => $menus,
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
    public function update(Request $request, OrderMenu $orderMenu)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderMenu $orderMenu)
    {
        //
    }
}
