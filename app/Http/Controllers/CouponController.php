<?php

namespace App\Http\Controllers;
use App\Models\Coupon;

use Illuminate\Http\Request;

class CouponController
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
    'code'             => 'required|string|max:255|unique:coupons,code',
    'discount_type'    => 'required|string|in:percentage,fixed', // adjust options as needed
    'discount_value'   => 'required|numeric|min:0',
    'start_date'       => 'required|date',
    'end_date'         => 'required|date|after_or_equal:start_date',
    'min_order_amount' => 'nullable|numeric|min:0',
    'max_uses'         => 'required|integer|min:0',
    'status'           => 'required|boolean',
]);
$result=Coupon::create($validate);
        if($result){

return response()->json(['message'=>'coupon is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'coupon creation filed'],404);
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
    'code'             => 'nullable|string|max:255|unique:coupons,code',
    'discount_type'    => 'nullable|string|in:percentage,fixed', // adjust options as needed
    'discount_value'   => 'nullable|numeric|min:0',
    'start_date'       => 'nullable|date',
    'end_date'         => 'nullable|date|after_or_equal:start_date',
    'min_order_amount' => 'nullable|numeric|min:0',
    'max_uses'         => 'nullable|integer|min:0',
    'status'           => 'nullable|boolean',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Coupon::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'coupon is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'coupon not found'],404);
        }
    }
}
