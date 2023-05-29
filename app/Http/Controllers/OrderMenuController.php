<?php

namespace App\Http\Controllers;

use App\Models\OrderMenu;
use App\Models\Menu;
use App\Http\Requests\StoreOrderMenuRequest;
use App\Http\Requests\UpdateOrderMenuRequest;

class OrderMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $menus = Menu::all();
    return view('order.order', [
        'menus' => $menus,
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
    public function show(OrderMenu $orderMenu)
    {
        //
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
