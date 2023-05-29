<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('dashboard.menu.menu', [
            'menus' => $menus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.menu.menu-create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('menu-images');
        }

        if (Menu::create($validated)) {
            return redirect('/admin/menu')->with('success', 'Menu item is successfully saved');
        }

        return redirect('/admin/menu')->with('error', 'Menu item is failed to save');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menus = Menu::all();

        return view('dashboard.menu.menu', [
            'menus' => $menus,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.menu.menu-update', [
            'menu' => $menu,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,png,jpg,svg',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('menu-images');
        }

        if ($menu->update($validated)) {
            return redirect('/admin/menu')->with('success', 'Menu item is successfully updated');
        }

        return redirect('/admin/menu')->with('error', 'Menu item is failed to update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::delete($menu->image);
        }

        if ($menu->delete()) {
            return redirect('/admin/menu')->with('success', 'Menu item is successfully deleted');
        }

        return redirect('/admin/menu')->with('error', 'Menu item is failed to delete');
    }
}
