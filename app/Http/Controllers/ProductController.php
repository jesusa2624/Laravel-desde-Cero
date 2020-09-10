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

        // $products = DB::table('products')->get();

        // dd($products);

        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }


    public function create()
    {
        return 'Este es el formulario para crear un producto desde el Controller';
    }

    public function store()
    {
        // 
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);
        // $product = DB::table('products')->where('id', $product)->first();
        // $product = DB::table('products')->find($product);

        // dd($product);

        return view('products.show')->with([
            'product' => $product,
            'html' => "<h2>Subtitle</h2>",
        ]);
    }

    public function edit($product)
    {
        return "edita el archivo que nos permite mostrar el id {$product}";
    }

    public function update($product)
    {
        // 
    }

    public function destroy($product)
    {
        // 
    }

}
