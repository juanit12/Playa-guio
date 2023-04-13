<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\House;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hostal = new House();
        $hostal->type=$request->type;
        $hostal->people=$request->people;
        $hostal->description=$request->description;
        $hostal->include=$request->include;
        $hostal->price=$request->price;

        $hostal->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return $house;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house->delete();

        return response()->json([
            'message'=>'Success'
        ]);
    }
}
