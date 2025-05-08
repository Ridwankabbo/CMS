<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usersinfo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{
    public function singIn(Request $request){
        $incommingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        if(auth()->attempt(['email' => $incommingFields['email'], 'password' => $incommingFields['password']])){
            $request->session()->regenerate();
            //$data = Usersinfo::where('user_id', auth()->id());
            return redirect('/profile');
        }
        else{
            return redirect('/singin');
        }
        
       

    }

    public function singUp(Request $request){

        $inCommingFields = $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')], 
            'password' => 'required',
            'phone' => 'required'
        ]);

        $user = User::create($inCommingFields);
        auth()->login($user);

        $user_data = Usersinfo::where('user_id', auth()->id())->get();
        return redirect('/profile');
       
    }


    function logOut()   {
        auth()->logout();
        return redirect('/');
    }
}
