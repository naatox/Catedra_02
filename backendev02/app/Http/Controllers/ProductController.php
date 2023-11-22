<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return response()->json($products);
    }
    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return response()->json('Product deleted!');
    }
    public function update(Request $request)
    {
        $product = Product::find($request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return response()->json('Product updated!');

    }
    public function store(Request $request)
    {
        try{
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'imageName' => $request->imageName
        ]);

        return response()->json('Product created!');
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Error xd',
                'error' => $e->getMessage(),
            ], 500);
    }
    }
}
