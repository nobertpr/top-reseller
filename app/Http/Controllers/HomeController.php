<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "items" => Item::paginate(9),
            "title" => "Home",
            "navbar_cat" => Category::all()
        ]);
    }
}
