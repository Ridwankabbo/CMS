<?php

namespace App\Http\Controllers;
use App\Models\Templates;
use App\Models\Usersinfo;
use App\Models\Usersprojects;
use App\Models\WebSiteSections;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Str;


class userInfoController extends Controller
{
    //



    // First I have to check that the user already have data or not

    public function Save(Request $request)
    {

        /*
            ==========================
                Old Code
            ==========================
            

        //Used for data validation testing

        // $request->validate([
        //     // 'title' => 'required',
        //     // 'intro_text' => 'required',
        //     // 'image' => 'required',
        //     // 'school_image' =>'required',
        //     // 'collage_image' => 'required',
        //     // 'university_image' => 'required',
        //     // 'about' => 'required',
        //     // 'phone' => 'required'
        // ]);


        //add loged user id to 'request' array variavle 
        $request['user_id'] = auth()->id();


        // check that the loguser has data or not
        $isData = Usersinfo::find($request['user_id']);
        $isProjectData = Usersprojects::find($request['user_id']);


        $university_img_fullName = $collage_img_fullName = $school_img_fullName = $user_img_fullName = $project_img_fullName = "";
        $destination_path = public_path('images/users/');

        if ($isData) {


            // getting images that are dequired 

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $user_img_extention = $image->getClientOriginalExtension();
                $user_img_fileName = Str::random(15);
                $user_img_fullName = "$user_img_fileName" . '.' . "$user_img_extention";
                $image->move($destination_path, $user_img_fullName);


                Usersinfo::where('user_id', $request['user_id'])->update([
                    'image' => $user_img_fullName
                ]);

            }
            ;


            if ($request->hasFile('school_image')) {
                $school_img = $request->file('school_image');
                $school_img_extention = $school_img->getClientOriginalExtension();
                $school_img_fileName = Str::random(15);
                $school_img_fullName = "$school_img_fileName" . '.' . "$school_img_extention";
                $school_img->move($destination_path, $school_img_fullName);



                Usersinfo::where('user_id', $request['user_id'])->update([
                    'school_img' => $school_img_fullName,
                ]);


            }

            if ($request->hasFile('collage_image')) {

                $collage_img = $request->file('collage_image');
                $collage_img_extention = $collage_img->getClientOriginalExtension();
                $collage_img_fileName = Str::random(15);
                $collage_img_fullName = "$collage_img_fileName" . '.' . "$collage_img_extention";
                $collage_img->move($destination_path, $collage_img_fullName);



                Usersinfo::where('user_id', $request['user_id'])->update([
                    'collage_img' => $collage_img_fullName

                ]);


            }

            if ($request->hasFile('university_image')) {
                # code...
                $university_img = $request->file('university_image');
                $university_img_extention = $university_img->getClientOriginalExtension();
                $university_img_fileName = Str::random(15);
                $university_img_fullName = "$university_img_fileName" . '.' . "$university_img_extention";

                $university_img->move($destination_path, $university_img_fullName);


                Usersinfo::where('user_id', $request['user_id'])->update([
                    'university_img' => $university_img_fullName
                ]);


            }

            // if ($request->hasFile('project_image')) {
            //     $project_img = $request->file('project_image');
            //     $project_img_extention = $project_img->getClientOriginalExtension();
            //     $project_img_fileName = Str::random(15);
            //     $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            // }

            // if ($isProjectData) {


            //     if ($request->hasFile('project_image')) {
            //         $project_img = $request->file('project_image');
            //         $project_img_extention = $project_img->getClientOriginalExtension();
            //         $project_img_fileName = Str::random(15);
            //         $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            //         $project_img->move($destination_path, $project_img_fullName);

            //     }

            //     Usersprojects::where('user_id', $request['user_id'])->update([
            //         'project_name' => $request->project_name,
            //         'project_img' => $project_img_fullName,
            //         'project_git_url' => $request->project_git_url,
            //         'user_id' => $request->user_id
            //     ]);
            // } else {

            //     if ($request->hasFile('project_image')) {
            //         $project_img = $request->file('project_image');
            //         $project_img_extention = $project_img->getClientOriginalExtension();
            //         $project_img_fileName = Str::random(15);
            //         $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            //         $project_img->move($destination_path, $project_img_fullName);
            //     }

            //     Usersprojects::create([
            //         'project_name' => $request->project_name,
            //         'project_img' => $project_img_fullName,
            //         'project_git_url' => $request->project_git_url,
            //         'user_id' => $request->user_id
            //     ]);

            // }


            // Updat values

            Usersinfo::where('user_id', $request['user_id'])->update([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'about' => $request->about,
                'phone' => $request->phone,

                // For updating images

                // 'image' => $user_img_fullName,
                // 'school_img' => $school_img_fullName,
                // 'collage_img' => $collage_img_fullName,
                // 'university_img' => $university_img_fullName,
            ]);

            // Usersprojects::where('user_id', $request['user_id'])->update([
            //     'project_name' => $request->project_name,
            //     'project_img' => $request->project_img_fullName,
            //     'project_git_url' => $request->project_get_url
            // ]);



        } else {



            // getting images that are dequired 

            // if ($request->hasFile('image') || $request->hasFile('school_image') || $request->hasFile('collage_image') || $request->hasFile('university_image')) {
            //     $image = $request->file('image');
            //     $school_img = $request->file('school_image');
            //     $collage_img = $request->file('collage_image');
            //     $university_img = $request->file('university_image');
            //     $user_img_fileName = $image->getClientOriginalName();
            //     $school_img_fileName = $school_img->getClientOriginalName();
            //     $collage_img_fileName = $collage_img->getClientOriginalName();
            //     $university_image_fileName = $university_img->getClientOriginalName();
            //     $destination_path = public_path('images/users');
            //     try {
            //         $image->move($destination_path, $user_img_fileName);
            //         $school_img->move($destination_path, $school_img_fileName);
            //         $collage_img->move($destination_path, $collage_img_fileName);
            //         $university_img->move($destination_path, $university_image_fileName);
            //     } catch (\Throwable $th) {
            //         //throw $th;
            //     }
            // }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $user_img_extention = $image->getClientOriginalExtension();
                $user_img_fileName = Str::random(15);
                $user_img_fullName = "$user_img_fileName" . '.' . "$user_img_extention";
                $image->move($destination_path, $user_img_fullName);
            }

            if ($request->hasFile('school_image')) {
                $school_img = $request->file('school_image');
                $school_img_extention = $school_img->getClientOriginalExtension();
                $school_img_fileName = Str::random(15);
                $school_img_fullName = "$school_img_fileName" . '.' . "$school_img_extention";
                $school_img->move($destination_path, $school_img_fullName);
            }

            if ($request->hasFile('collage_image')) {

                $collage_img = $request->file('collage_image');
                $collage_img_extention = $collage_img->getClientOriginalExtension();
                $collage_img_fileName = Str::random(15);
                $collage_img_fullName = "$collage_img_fileName" . '.' . "$collage_img_extention";
                $collage_img->move($destination_path, $collage_img_fullName);
            }

            if ($request->hasFile('university_image')) {
                # code...
                $university_img = $request->file('university_image');
                $university_img_extention = $university_img->getClientOriginalExtension();
                $university_img_fileName = Str::random(15);
                $university_img_fullName = "$university_img_fileName" . '.' . "$university_img_extention";

                $university_img->move($destination_path, $university_img_fullName);
            }

            // if ($request->hasFile('project_image')) {
            //     $project_img = $request->file('project_image');
            //     $project_img_extention = $project_img->getClientOriginalExtension();
            //     $project_img_fileName = Str::random(15);
            //     $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            // }



            // if ($isProjectData == false) {


            //     if ($request->hasFile('project_image')) {
            //         $project_img = $request->file('project_image');
            //         $project_img_extention = $project_img->getClientOriginalExtension();
            //         $project_img_fileName = Str::random(15);
            //         $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            //         $project_img->move($destination_path, $project_img_fullName);

            //     }

            //     Usersprojects::where('user_id', $request['user_id'])->update([
            //         'project_name' => $request->project_name,
            //         'project_img' => $project_img_fullName,
            //         'project_git_url' => $request->project_git_url,
            //         'user_id' => $request->user_id
            //     ]);
            // } else {

            //     if ($request->hasFile('project_image')) {
            //         $project_img = $request->file('project_image');
            //         $project_img_extention = $project_img->getClientOriginalExtension();
            //         $project_img_fileName = Str::random(15);
            //         $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            //         $project_img->move($destination_path, $project_img_fullName);
            //     }

            //     Usersprojects::create([
            //         'project_name' => $request->project_name,
            //         'project_img' => $project_img_fullName,
            //         'project_git_url' => $request->project_git_url,
            //         'user_id' => $request->user_id
            //     ]);

            // }




            // if  there was no data then add the new data

            Usersinfo::create([
                'title' => $request->title,
                'intro_text' => $request->intro_text,
                'image' => $user_img_fullName,
                'school_img' => $school_img_fullName,
                'collage_img' => $collage_img_fullName,
                'university_img' => $university_img_fullName,
                'about' => $request->about,
                'phone' => $request->phone,
                'user_id' => $request->user_id,
                'template_id' => 1

            ]);

            WebSiteSections::create([
                'user_id' => $request->user_id,
                'intorduction_section' => 1,
                'education_section' => 1,
                'about_section' => 1,
                'skills_section' => 1,
                'project_section' => 1
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

        */      

    }


    // showProfile function used for show there profiles

    // public function showProfile()
    // {
    //     // Get the currently logged-in user's portfolio info
    //     $user_id = auth()->id();
    //     $userPortfolios = Usersinfo::where('user_id', $user_id)->get();
    //     $usersProjects = Usersprojects::where('user_id', $user_id)->get();
    //     $userSelectedSections = WebSiteSections::where('user_id', $user_id)->get();


    //     if ($userPortfolios->isNotEmpty()) {

    //         // Get the selected template id
    //         $userPortfolio = $userPortfolios->first();
    //         // $usersproject = $usersProjects->first();
    //         $selectedSection = $userSelectedSections->first();
    //         $template = Templates::where('id', $userPortfolio->template_id)->first();


    //         //Updated method

    //         if ($template) {

    //             // return the selected template view with data
    //             return view('templates/' . "$template->template_name" . '/home', compact('userPortfolio', 'usersProjects', 'selectedSection'));

    //         }


    //         //Old method

    //         // if($userPortfolio->template_id == "1"){
    //         //     // Pass the data to a view
    //         //     //return view("templates.{{$name->template_name}}.home", ['portfolio' => $userPortfolio]);
    //         //     //return view("templates.portfolio-1.home", ['portfolio' => $userPortfolio]);
    //         // }
    //         // if($userPortfolio->template_id == "2"){
    //         //     // Pass the data to a view
    //         //     return view('templates.portfolio-2.home', ['portfolio' => $userPortfolio]);
    //         // }
    //     }
    // }

    public function showProfile(Request $request)
    {
        return $request->user();
    }


    function addNewProject(Request $request)
    {
        $request['user_id'] = auth()->id();
        $logo_destination_path = public_path('images/users/');
        $app_destination_path = public_path('mobile_apps');

        if ($request->hasFile('project_image')) {
            $project_img = $request->file('project_image');
            $project_img_extention = $project_img->getClientOriginalExtension();
            $project_img_fileName = Str::random(15);
            $project_img_fullName = "$project_img_fileName" . '.' . "$project_img_extention";
            $project_img->move($logo_destination_path, $project_img_fullName);
        }

        Usersprojects::create([
            'user_id' => $request->user_id,
            'project_name' => $request->project_name,
            'project_img' => $project_img_fullName,
            'project_git_url' => $request->project_git_url
        ]);

        return redirect('/user-projects');

    }


    function deletProject($id)
    {

        $hasProject = Usersprojects::find($id);

        if ($hasProject) {
            $hasProject->delete();
        }

        return redirect('/user-projects');
    }





}
