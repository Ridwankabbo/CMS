<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\User;
use App\Models\Usersinfo;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{

    public function __construct(){
        $this->middleware('auth:api', ['except'=>['login', 'singup', 'refresh']]);
    }

    public function singIn(Request $request){
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

        if($token = Auth::attempt($incommingFields)){
            return response()->json(['error'=>'Unauthorized']);
        }

        return $this->respondWithToken($token);
       

    }

    public function singUp(Request $request){

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
       
        return $this->respondWithToken($token, 201);
    }


    function logOut()   {
        auth()->logout();
        // return redirect('/');

        return response()->json(['message'=>'Logout successfull']);
    }

    function adminController(Request $request){
        $incommingFields = $request->validate([
            'email' => 'required', 
            'password' => 'required'
        ]);

        $value = Admins::where('email', $incommingFields['email'])->get();

        if($value){
            $value = $value->first();
            if($value->email == $incommingFields['email'] && $value->password == $incommingFields['password']){
                // $request->session()->start();
                // auth()->login($value);
                
                
                return redirect('/admin-panel');

                // $datas = Admins::where('id', $value->email)->get();

                // return view('admin-panel', ['datas'=> $datas]);
                
            }
            else{
                return redirect('/admin-login');
            }
        }

    }


    protected function respondWithToken($token){
        return response()->json([
            'accessToken'=>$token,
            'token_type'=>'bearer',
            'expires_in'=> Auth::factory()->getTTL() * 60
        ]);
    }
}
