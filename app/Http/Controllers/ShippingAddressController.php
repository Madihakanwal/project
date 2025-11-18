<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingAddress;
class ShippingAddressController
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
    'user_id'     => 'required|integer|exists:users,id',
    'full_name'   => 'required|string|max:255',
    'phone'       => 'required|string|max:20',
    'email'       => 'required|email|max:255',
    'address'     => 'required|string',
    'city'        => 'required|string|max:100',
    'state'       => 'required|string|max:100',
    'postal_code' => 'required|string|max:20',
    'country'     => 'required|string|max:100',
    'id_default'  => 'required|boolean',
]);
$result=ShippingAddress::create($validate);
        if($result){

return response()->json(['message'=>'shippingaddress is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'shippingaddress creation filed'],404);
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
    'user_id'     => 'nullable|integer|exists:users,id',
    'full_name'   => 'nullable|string|max:255',
    'phone'       => 'nullable|string|max:20',
    'email'       => 'nullable|email|max:255',
    'address'     => 'nullable|string',
    'city'        => 'nullable|string|max:100',
    'state'       => 'nullable|string|max:100',
    'postal_code' => 'nullable|string|max:20',
    'country'     => 'nullable|string|max:100',
    'id_default'  => 'nullable|boolean',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $result=ShippingAddress::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'shippingaddress is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'shippingaddress not found'],404);
        }
    }
}
