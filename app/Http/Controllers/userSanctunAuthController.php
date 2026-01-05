<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Models\User;
use App\Models\Usersinfo;
use Hash;
use Illuminate\Http\Request;

class userSanctunAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function generateOtp()
    {
        return rand(100000, 999999);
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!User::where('email', $request->email)->exists()) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            $user_info = Usersinfo::create([
                'user_id' => $user->id
            ]);

            $opt = $this->generateOtp();
            Otp::create([
                'email' => $user->email,
                'otp' => $opt,
                'expires_at' => now()->addMinutes(5),
            ]);

            return response()->json(['otp' => $opt, 'user_info' => $user_info]);
        }
        else{
            return response()->json([
                'message'=>'User already exist'
            ]);
        }

    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required'
        ]);

        $otp = Otp::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otp) {
            return response()->json([
                'message' => 'Invalid otp'
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('auth_token')->plainTextToken;

        $otp->delete();

        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function singin(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ]);
        }
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                "message" => "Invalid password"
            ]);
        } else {
            $token = $user->createToken($user->name);
            return response()->json([
                'token' => $token->plainTextToken,
            ]);
        }

    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        if (!User::where('email', $request->email)->exists()) {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }

        $otp = $this->generateOtp();
        Otp::create([
            'email' => $request->email,
            'otp' => $otp,
            'expires_at' => now()->addMinutes(5),
        ]);

        return response()->json([
            'otp' => $otp
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function resetPassword(Request $request)
    {
        //
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required',
            'password' => 'required',
        ]);

        $otp = Otp::where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otp) {
            return response()->json(['message' => 'Invalid otp']);
        }

        User::where('email', $request->email)->update([
            'password' => bcrypt($request->password)
        ]);

        return response()->json([
            'message' => 'password reset successfull'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $request)
    {
        //
        $request->user()->tokens()->delete();

        return response()->json(['message' => "Logout successfully"]);
    }
}
