<?php

namespace App\Http\Controllers;

use App\Models\Usersinfo;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = Usersinfo::all();

        // return response()->json(['AllProfileInfo'=>$data]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usersinfo $usersinfo)
    {
        //
        return response()->json(['userInfo'=>$usersinfo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usersinfo $usersinfo)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usersinfo $usersinfo)
    {
        //
        $validateData = $request->validate([
            "id" =>'required'
        ]);

        $usersinfo->update($validateData);

        return response()->json(['message'=>"Data updated successfully"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usersinfo $usersinfo)
    {
        //
        $usersinfo->delete();

        return response()->json(['message'=>"Data deleted successfully"]);
    }
}
