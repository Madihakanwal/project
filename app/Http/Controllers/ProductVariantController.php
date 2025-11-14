<?php

namespace App\Http\Controllers;
use App\Models\ProductVariant;

use Illuminate\Http\Request;

class ProductVariantController
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
        $request->validate([
    'product_id'        => 'required|integer|exists:products,id',
    'attribute'         => 'required|string|max:255',
    'value'             => 'required|string|max:255',
    'price_adjustment'  => 'nullable|numeric|min:0',
    'stock'             => 'required|integer|min:0',
]);
$result=ProductVariants::create($validate);
        if($result){

return response()->json(['message'=>'productvariants is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'productvariants creation filed'],404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
    'product_id'        => 'nullable|integer|exists:products,id',
    'attribute'         => 'ullable|string|max:255',
    'value'             => 'ullable|string|max:255',
    'price_adjustment'  => 'nullable|numeric|min:0',
    'stock'             => 'ullable|integer|min:0',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Productvariants::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'productvariants is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'productvariants not found'],404);
        }
    }
}
