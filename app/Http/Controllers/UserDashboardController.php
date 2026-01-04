<?php

namespace App\Http\Controllers;

use App\Models\Usersinfo;
use App\Models\User;
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
    public function create(Request $request)
    {
        //
        $Usersinfo =  Usersinfo::create($request);
        return response()->json(['$usersinfo', $Usersinfo]);
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
    public function show(Request $request, Usersinfo $usersinfo)
    {
        //
        $user = $request->user();
        $user_information = Usersinfo::where('user_id', $user->id)->first();
        return response()->json(['user'=>$user,'userInfo'=>$user_information]);
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
    public function update(Request $request, Usersinfo $usersinfo, $dashboard   )
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
