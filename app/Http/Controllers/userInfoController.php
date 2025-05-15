<?php

namespace App\Http\Controllers;

use App\Models\Templates;
use App\Models\Usersinfo;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    //



    // First I have to check that the user already have data or not

    public function Save(Request $request)
    {

        //Used for data validation testing

        $request->validate([
            // 'title' => 'required',
            // 'intro_text' => 'required',
            // 'image' => 'required',
            // 'school_image' =>'required',
            // 'collage_image' => 'required',
            // 'university_image' => 'required',
            // 'about' => 'required',
            // 'phone' => 'required'
        ]);


        //add loged user id to 'request' array variavle 
        $request['user_id'] = auth()->id();


        // check that the loguser has data or not
        $isData = Usersinfo::find($request['user_id']);


        if ($isData) {
            $university_image_fileName = $collage_img_fileName = $school_img_fileName =$user_img_fileName = "";

            // getting images that are dequired 

            if($request->hasFile('image') && $request->hasFile('school_image') && $request->hasFile('collage_image') && $request->hasFile('university_image')) {
                $image = $request->file('image');
                $school_img = $request->file('school_image');
                $collage_img = $request->file('collage_image');
                $university_img = $request->file('university_image');
                $user_img_fileName = $image->getClientOriginalName();
                $school_img_fileName = $school_img->getClientOriginalName();
                $collage_img_fileName = $collage_img->getClientOriginalName();
                $university_image_fileName = $university_img->getClientOriginalName();
                $destination_path = public_path('images/users/');
               
                

                try {

                    // Moving images into a file

                    $image->move($destination_path, $user_img_fileName);
                    $school_img->move($destination_path, $school_img_fileName);
                    $collage_img->move($destination_path, $collage_img_fileName);
                    $university_img->move($destination_path, $university_image_fileName);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }


            // Updat values

            Usersinfo::where('user_id', $request['user_id'])->update([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'image' => $user_img_fileName,
                'school_img' => $school_img_fileName,
                'collage_img' => $collage_img_fileName,
                'university_img' => $university_image_fileName,
                'about' => $request->about,
                'phone' => $request->phone
            ]);

            

        } else {

            $university_image_fileName = $collage_img_fileName = $school_img_fileName =$user_img_fileName = "";


            // getting images that are dequired 

            if ($request->hasFile('image') && $request->hasFile('school_image') && $request->hasFile('collage_image') && $request->hasFile('university_image')) {
                $image = $request->file('image');
                $school_img = $request->file('school_image');
                $collage_img = $request->file('collage_image');
                $university_img = $request->file('university_image');
                $user_img_fileName = $image->getClientOriginalName();
                $school_img_fileName = $school_img->getClientOriginalName();
                $collage_img_fileName = $collage_img->getClientOriginalName();
                $university_image_fileName = $university_img->getClientOriginalName();
                $destination_path = public_path('images/users');
                try {
                    $image->move($destination_path, $user_img_fileName);
                    $school_img->move($destination_path, $school_img_fileName);
                    $collage_img->move($destination_path, $collage_img_fileName);
                    $university_img->move($destination_path, $university_image_fileName);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }

            // if  there was no data then add the new data

            Usersinfo::create([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'image' => $user_img_fileName,
                'school_img' => $school_img_fileName,
                'collage_img' => $collage_img_fileName,
                'university_img' => $university_image_fileName,
                'about' => $request->about,
                'phone' => $request->phone

            ]);

            

        }



        //Used for data connection testing

        // UsersInfo::create([
        //     'protfolio_title' => $request['title'],
        //     'intorduction_text' => $request['Introductin_text'],
        //     'image' => $request['image_file'],
        //     'about_text' => $request['about'],
        //     'user_id' => $request['user_id']
        // ]);

        //return redirect()->route('/profile')->with('success', 'Portfolio information added!');


        // redirect to the destination url

        return redirect('/profile');

    }


    // showProfile function used for show there profiles

    public function showProfile()
    {
        // Get the currently logged-in user's portfolio info
        $userPortfolios = Usersinfo::where('user_id', auth()->id())->get();


        if($userPortfolios->isNotEmpty()){
            $userPortfolio = $userPortfolios->first();
            $template = Templates::where('id', $userPortfolio->template_id)->first();



            //Updated method

            if($template){

                // return the template view with data

                return view('templates/'."$template->template_name".'/home', ['portfolio' => $userPortfolio]);
            }


            //Old method

            // if($userPortfolio->template_id == "1"){
            //     // Pass the data to a view
            //     //return view("templates.{{$name->template_name}}.home", ['portfolio' => $userPortfolio]);
            //     //return view("templates.portfolio-1.home", ['portfolio' => $userPortfolio]);
            // }
            // if($userPortfolio->template_id == "2"){
            //     // Pass the data to a view
            //     return view('templates.portfolio-2.home', ['portfolio' => $userPortfolio]);
            // }
        }
    }





}
