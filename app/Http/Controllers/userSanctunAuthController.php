<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usersinfo;
use Illuminate\Http\Request;

class userSanctunAuthController extends Controller
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
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        Usersinfo::create([
            'user_id'=>$user->id
        ]);
        
        $token = $user->createToken($request->name);

        return response()->json(['token'=>$token]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $request->validate([
            'email'=>'required|email|exists:users',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->email)->first();

        $token = $user->createToken($user->name);

        return response()->json(['token'=>$token->plainTextToken]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $request->user()->tokens()->delete();

        return response()->json(['message'=>"Logout successfully"]);
    }
}
