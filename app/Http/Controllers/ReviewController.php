<?php

namespace App\Http\Controllers;
use App\Models\Review;

use Illuminate\Http\Request;

class ReviewController
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
    'user_id'    => 'required|integer|exists:users,id',
    'product_id' => 'required|integer|exists:products,id',
    'rating'     => 'required|integer|min:1|max:5',
    'comment'    => 'nullable|string',
    'status'     => 'required|string|in:pending,approved,rejected',
]);
$result=Review::create($validate);
        if($result){

return response()->json(['message'=>'review is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'review creation filed'],404);
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
    'rating'     => 'nullable|integer|min:1|max:5',
    'comment'    => 'nullable|string',
    'status'     => 'nullable|string|in:pending,approved,rejected',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Review::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'review is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'review not found'],404);
        }
    }
}
