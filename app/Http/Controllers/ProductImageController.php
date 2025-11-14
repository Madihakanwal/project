<?php

namespace App\Http\Controllers;
use App\Models\ProductImage;

use Illuminate\Http\Request;

class ProductImageController
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
    'product_id' => 'required|integer|exists:products,id',
    'image_path' => 'required|string|max:255',
    'alt_text'   => 'nullable|string|max:255',
]);
$result=ProductImage::create($validate);
        if($result){

return response()->json(['message'=>'productimage is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'productimage creation filed'],404);
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
    'product_id' => 'nullable|integer|exists:products,id',
    'image_path' => 'nullable|string|max:255',
    'alt_text'   => 'nullable|string|max:255',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=ProductImage::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'productimage is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'productimage not found'],404);
        }
    }
}
