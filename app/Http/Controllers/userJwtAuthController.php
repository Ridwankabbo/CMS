<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\User;
use App\Models\Usersinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class userJwtAuthController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['singin', 'singup']]);
    }

    public function singIn(Request $request)
    {
        $incommingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        // if(auth()->attempt(['email' => $incommingFields['email'], 'password' => $incommingFields['password']])){
        //     $request->session()->regenerate();
        //     //$data = Usersinfo::where('user_id', auth()->id());
        //     return redirect('/overview');
        // }
        // else{
        //     return redirect('/singin');
        // }

        if ($token = $this->guard()->attempt($incommingFields)) {
            return $this->respondWithToken($token);
        }

        // $user = User::where('email', $request->email)->first();

        // $token = $request->user()->creatToken($user->name);
        return response()->json(['error' => 'aunauthorized']);


    }

    public function me(Request $request)
    {
        return response()->json($this->guard()->user());
    }

    public function singUp(Request $request)
    {

        $inCommingFields = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required',
            'phone' => 'required'
        ]);

        $user = User::create($inCommingFields);
        $token = Auth::login($user);

        //$user_data = Usersinfo::where('user_id', auth()->id())->get();
        // return redirect('/overview');

        return $this->respondWithToken($token);
    }


    function logOut()
    {
        $this->guard()->logout();
        // return redirect('/');

        return response()->json(['message' => 'Logout successfull']);
    }

    function adminController(Request $request)
    {
        $incommingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $value = Admins::where('email', $incommingFields['email'])->get();

        if ($value) {
            $value = $value->first();
            if ($value->email == $incommingFields['email'] && $value->password == $incommingFields['password']) {
                // $request->session()->start();
                // auth()->login($value);


                return redirect('/admin-panel');

            } else {
                return redirect('/admin-login');
            }
        }

    }

    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'accessToken' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }


    protected function guard()
    {
        return Auth::guard();
    }
}
