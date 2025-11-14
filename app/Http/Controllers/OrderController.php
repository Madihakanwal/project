<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController
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
    'user_id'             => 'required|integer|exists:users,id',
    'order_number'        => 'required|integer|unique:your_table_name,order_number',
    'total_amount'        => 'required|numeric|min:0',
    'discount'            => 'required|numeric|min:0',
    'shipping_cost'       => 'required|numeric|min:0',
    'payment_status'      => 'required|string|in:unpaid,paid,refunded',
    'order_status'        => 'required|string|in:pending,completed,cancelled',
    'shipping_address_id' => 'nullable|integer|exists:shipping_addresses,id',
    'payment_method'      => 'nullable|string|max:255',
]);
$result=Order::create($validate);
        if($result){

return response()->json(['message'=>'order is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'order creation filed'],404);
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
    'user_id'             => 'nullable|integer|exists:users,id',
    'order_number'        => 'nullable|integer|unique:your_table_name,order_number',
    'total_amount'        => 'nullable|numeric|min:0',
    'discount'            => 'nullable|numeric|min:0',
    'shipping_cost'       => 'nullable|numeric|min:0',
    'payment_status'      => 'nullable|string|in:unpaid,paid,refunded',
    'order_status'        => 'nullable|string|in:pending,completed,cancelled',
    'shipping_address_id' => 'nullable|integer|exists:shipping_addresses,id',
    'payment_method'      => 'nullable|string|max:255',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Order::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'order is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'order not found'],404);
        }
    }
}
