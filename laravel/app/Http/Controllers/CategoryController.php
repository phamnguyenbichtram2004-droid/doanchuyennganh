<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
        $categories = Category::orderBy('id','desc')->get();
        view()->share('categories', $categories);
    }


    public function index()
    {
        $categories = Category::latest()->get(); 
        return view('admin.category.category-list', compact('categories'));
    }
}