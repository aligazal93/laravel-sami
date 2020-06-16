<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index' , compact('products'));

    }

    public function create()
    {
        return view('products.create');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show' , compact('product'));
    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'required|unique:products',
            'desc' => 'required|min:10',
            'price'=>'required|numeric',
            'available'=>'required',
            'count'=>'required',
        ]);

        $products = Product::all();

        $product = new Product();
        $product  -> name = request('name');
        $product -> desc = request('desc');
        $product -> price = request('price');
        $product -> available = request('available');
        $product -> count = request('count');
        $product -> save();
        return redirect('products') -> with('message' , 'Thank You . You ara Adding a products successfully' );
    }

    public function search(Request $request)
    {
        $search = $request -> get('search');
        $products = Product::where('name' , 'like' ,'%'.$search.'%')->get();
        return view('products.index' , compact('products'));




    }
}
