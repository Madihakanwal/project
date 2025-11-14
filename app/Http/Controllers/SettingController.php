<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController
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
    'key'   => 'required|string|max:255|unique:your_table_name,key',
    'value' => 'nullable|string',
]);
$result=Setting::create($validate);
        if($result){

return response()->json(['message'=>'setting is created successfully'],201);
        }
        else{
            return response()->json(['message' => 'setting creation filed'],404);
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
    'key'   => 'nullable|string|max:255|unique:your_table_name,key',
    'value' => 'nullable|string',
]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result=Setting::where('id',$id)->firstOrfail();
        if($result){
            $result->delete();
return response()->json(['message'=>'setting is deleted successfully'],200);
        }
        else{
            return response()->json(['message' => 'setting not found'],404);
        }
    }
}
