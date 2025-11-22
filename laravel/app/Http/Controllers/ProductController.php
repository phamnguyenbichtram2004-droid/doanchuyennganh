<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function __construct()
    {   
        $this->middleware('auth');

    }


    public function index()
    {
        $products = Product::latest()->get(); 
        return view('admin.product.product-list', compact('products'));
    }
}
