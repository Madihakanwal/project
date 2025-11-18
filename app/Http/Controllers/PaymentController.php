<?php

namespace App\Http\Controllers;
use App\Models\Payment;

use Illuminate\Http\Request;

class PaymentController
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
       $validate= $request->validate([
    'order_id'        => 'required|integer|exists:orders,id',
    'payment_method'  => 'nullable|integer',
    'transaction_id'  => 'required|integer|min:1',
    'amount'          => 'required|numeric|min:0',
    'status'          => 'required|boolean',
]);
$result=Payment::create($validate);
        if($result){

return response()->json(['message'=>'payment is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'payment creation filed'],404);
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
        $validate= $request->validate([
    'order_id'        => 'nullable|integer|exists:orders,id',
    'payment_method'  => 'nullable|integer',
    'transaction_id'  => 'nullable|integer|min:1',
    'amount'          => 'nullable|numeric|min:0',
    'status'          => 'nullable|boolean',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Payment::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'payment is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'payment not found'],404);
        }
    }
}
