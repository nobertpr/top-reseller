<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(string $category_name)
    {
        $category = Category::where('category_name', $category_name)->first();
        $items = Item::where('category_id', $category->id)->paginate(9);
        return view('category', [
            "category" => $category,
            "items" => $items,
            "title" => "Category - " . $category_name,
            "navbar_cat" => Category::all()
        ]);
    }
}
