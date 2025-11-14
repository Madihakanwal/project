<?php

namespace App\Http\Controllers;
use App\Models\OrderItem;

use Illuminate\Http\Request;

class OrderItemController
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
    'order_id'   => 'required|integer|exists:orders,id',
    'product_id' => 'required|integer|exists:products,id',
    'variant_id' => 'nullable|integer|exists:variants,id',
    'quantity'   => 'required|integer|min:1',
    'price'      => 'required|numeric|min:0',
    'subtotal'   => 'required|numeric|min:0',
]);
$result=OrderItem::create($validate);
        if($result){

return response()->json(['message'=>'orderitem is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'orderitem creation filed'],404);
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
    'order_id'   => 'nullable|integer|exists:orders,id',
    'product_id' => 'nullable|integer|exists:products,id',
    'variant_id' => 'nullable|integer|exists:variants,id',
    'quantity'   => 'nullable|integer|min:1',
    'price'      => 'nullable|numeric|min:0',
    'subtotal'   => 'nullable|numeric|min:0',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $result=OrderItem::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'orderitem is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'orderitem not found'],404);
        }
    }
}
