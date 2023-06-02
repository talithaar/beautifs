<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = \App\Product::all();

        return view('viewproducts', ['allProducts' => $products]);
    }


    public function create(){
        return view('createproduct');
    }


    public function store(Request $request) {
        \App\Product::create([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
          'count' => $request->get('count'),
        ]);

        return redirect('/products');
    }
}
