<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('arsip.partials.show-category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'category_code' => 'required|max:255',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_code' => $request->category_code,
        ]);

        return redirect()->route('category.index')->with('success', 'Category added successfully.');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully.');
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('arsip.partials.edit-category', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'category_code' => 'required|max:255',
        ]);

        $category->category_name = $request->category_name;
        $category->category_code = $request->category_code;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
}
