<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Http\Request;

class CartController
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
    'user_id' => 'required|integer|exists:users,id',
    'session_id' => 'nullable|string|max:255',
    'total' => 'required|numeric|min:0',
]);
$result=Cart::create($validate);
        if($result){

return response()->json(['message'=>'cart is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'cart creation filed'],404);
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
    'user_id' => 'nullable|integer|exists:users,id',
    'session_id' => 'nullable|string|max:255',
    'total' => 'nullable|numeric|min:0',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $result=Cart::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'cart is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'cart not found'],404);
        }
    }
}



