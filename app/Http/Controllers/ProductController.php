<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
// validation rules
'category_id' => 'required|exists:categories,id',
'sub_category_id' => 'required|exists:sub_categories,id',
    'name' => 'required|string|max:255|min:5',
    'slug' => 'required|string|max:255|min:5|unique:products,slug',
    'sku' => 'required|string|max:100|min:10|unique:products,sku',
    'price' => 'required|numeric|min:0|max:10000',
    'discount_price' => 'nullable|numeric|min:0|max:10000',
    'stock' => 'required|integer|min:0',
    'short_description' => 'nullable|string|min:100',
    'long_description'  => 'nullable|string|min:100',
    'status' => 'requires|boolean',
    'featured' => 'requires|boolean',
        ]);
        $result=Product::create($validate);
        if($result){

return response()->json(['message'=>'product is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'product creation filed'],404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $product=Product::where('slug',$slug)->firstOrfail();
        if($product){

return response()->json($Product);
        }
        else{
            return response()->json(['message' => 'product not found'],404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
 $validate = $request->validate([
// validation rules
'category_id' => 'nullable|exists:categories,id',
'sub_category_id' => 'nullable|exists:sub_categories,id',
    'name' => 'nullable|string|max:255|min:5',
    'slug' => 'nullable|string|max:255|min:5|unique:products,slug',
    'sku' => 'nullable|string|max:100|min:10|unique:products,sku',
    'price' => 'nullable|numeric|min:0|max:10000',
    'discount_price' => 'nullable|numeric|min:0|max:10000',
    'stock' => 'nullable|integer|min:0',
    'short_description' => 'nullable|string|min:100',
    'long_description'  => 'nullable|string|min:100',
    'status' => 'boolean',
    'featured' => 'boolean',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $result=Product::where('slug',$slug)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'product is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'product not found'],404);
        }
    }
}
