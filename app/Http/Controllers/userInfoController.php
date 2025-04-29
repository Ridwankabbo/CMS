<?php

namespace App\Http\Controllers;

use App\Models\Usersinfo;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    //


    public function Save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'intro_text' => 'required',
            'image' => 'required',
            'about' => 'required',
            'phone' => 'required'
        ]);

        $request['user_id'] = auth()->id();

        $isData = Usersinfo::find($request['user_id']);


        if($isData){

            
            Usersinfo::where('user_id', $request['user_id'])->update([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'image' => $request->image,
                'about' => $request->about,
                'phone' => $request->phone
            ]);

        }
        else{
            Usersinfo::create([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'image' => $request->image,
                'about' => $request->about,
                'phone' => $request->phone,
                'user_id' => $request->user_id
    
            ]);
        }



        // UsersInfo::create([
        //     'protfolio_title' => $request['title'],
        //     'intorduction_text' => $request['Introductin_text'],
        //     'image' => $request['image_file'],
        //     'about_text' => $request['about'],
        //     'user_id' => $request['user_id']
        // ]);

        //return redirect()->route('/profile')->with('success', 'Portfolio information added!');


        return redirect('/profile');

    }


    public function showProfile()
    {
        // Get the currently logged-in user's portfolio info
        $userPortfolio = Usersinfo::where('user_id', auth()->id())->get();

        // Pass the data to a view
        return view('templates.portfolio.home', ['portfolio' => $userPortfolio]);
    }


    


}
