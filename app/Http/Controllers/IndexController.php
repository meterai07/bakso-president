<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function order()
    {
        $menus = Menu::all();
        return view('order.order', [
            'menus' => $menus,
        ]);
    }
}
