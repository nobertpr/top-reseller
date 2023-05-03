<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index() {
        return view('aboutus', [
            "title" => "About Us",
            "navbar_cat" => Category::all()
        ]);
    }
}
