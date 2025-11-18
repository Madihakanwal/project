<?php

namespace App\Http\Controllers;
use App\Models\WishList;

use Illuminate\Http\Request;

class WishListController
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
    'user_id'    => 'required|integer|exists:users,id',
    'product_id' => 'required|integer|exists:products,id',
]);
$result=WishList::create($validate);
        if($result){

return response()->json(['message'=>'wishlist is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'wishlist creation filed'],404);
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
    'user_id'    => 'nullable|integer|exists:users,id',
    'product_id' => 'nullable|integer|exists:products,id',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
 $result=WishList::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'wishlist is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'wishlist not found'],404);
        }
    }
}
