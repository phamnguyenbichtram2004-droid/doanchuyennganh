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
    public function create()
    {
        return view('admin.product.add');
    }
    public function store(Request $request)
    {
        $product = product::create([
            'name' => $request->name,

        ]);
        if ($product)
            return redirect()->route('admin.product.index');
        else {
            return back();
        }
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name'=>$request->name,
        ]);
        if ($product)
            return redirect()->route('admin.product.index');
        else {
            return back();
        }
    }
    public function destroy($id){
             $product = Product::find($id);
             $product->delete();
              if ($product)
            return redirect()->route('admin.product.index');
        else {
            return back();
        }
    }
}
