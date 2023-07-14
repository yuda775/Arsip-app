<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        Category::create([
            'category_name' => $request->input('category_name'),
        ]);

        return redirect()->back()->with('success', 'Kategori dokumen berhasil ditambahkan.');
    }
}
