<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.categories', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.categories-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        if (Category::create($validated)) {
            return redirect('/admin/categories')->with('success', 'Category is successfully saved');
        }

        return redirect('/admin/categories')->with('error', 'Category is failed to save');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.categories-update', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        if ($category->update($validated)) {
            return redirect('/admin/categories')->with('success', 'Category is successfully updated');
        }

        return redirect('/admin/categories')->with('error', 'Category is failed to update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (Menu::where('category_id', $category->id)->count() > 0) {
            return redirect('/admin/categories')->with('error', 'Category is failed to delete because it has menu items');
        }
        
        if ($category->delete()) {
            return redirect('/admin/categories')->with('success', 'Category is successfully deleted');
        }

        return redirect('/admin/categories')->with('error', 'Category is failed to delete');
    }
}
