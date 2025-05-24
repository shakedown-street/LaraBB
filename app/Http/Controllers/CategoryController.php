<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show(int $id)
    {
        $category = Category::where('id', $id)->first();

        return view('categories.show', [
            'category' => $category,
        ]);
    }
}
