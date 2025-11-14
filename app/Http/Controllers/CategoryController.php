<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController
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
    'name'        => 'required|string|max:255',
    'slug'        => 'required|string|max:255|unique:your_table_name,slug',
    'description' => 'nullable|string',
    'status'      => 'required|boolean',
    'image'       => 'nullable|string|max:255',
]);
$result=Category::create($validate);
        if($result){

return response()->json(['message'=>'category is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'category creation filed'],404);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
    'name'        => 'nullable|string|max:255',
    'slug'        => 'nullable|string|max:255|unique:your_table_name,slug',
    'description' => 'nullable|string',
    'status'      => 'nullable|boolean',
    'image'       => 'nullable|string|max:255',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
         $result=Category::where('slug',$slug)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'category is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'category not found'],404);
        }
    }
}



