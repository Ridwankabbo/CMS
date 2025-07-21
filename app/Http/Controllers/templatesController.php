<?php

namespace App\Http\Controllers;

use App\Models\TemplatesSections;
use App\Models\WebSiteSections;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Usersinfo;

class templatesController extends Controller
{
    //

    // Dedicated function for update the template vale to Database
    public function selectTemplate($n)
    {
        $id = Auth()->id();
        Usersinfo::where('user_id', $id)->update([
            'template_id' => $n
        ]);
        WebSiteSections::where('user_id', $id)->update([
            'template_id' =>$n
        ]);

        return redirect('/web-templates');
    }



    //Dedicated for update the sections value to the Database
    public function selectSection(Request $request)
    {

        // $request->validate([
        //     'intro-section' => 'nullable|boolean',
        //     'edu-section' => 'nullable|boolean',
        //     'about-section' => 'nullable|boolean',
        //     'skills-section' =>'nullable|boolean',
        //     'project-section' => 'nullable|boolean'
        // ]);

        // Get checkbox values
        // If a checkbox was checked, its value (e.g., '1') will be present.
        // If it was UNCHECKED, it will NOT be present in the request.
        // The `input()` method allows you to provide a default value (false in this case)
        // if the key is not present.

        // Determining default is all false(0)
        $hasIntroSection = $request->input('intro-section', false); // Returns '1' or false
        $hasEduSection = $request->input('edu-section', false);     // Returns '1' or false
        $hasAboutSection = $request->input('about-section', false); // Returns '1' or false
        $hasSkillsSection = $request->input('skills-section', false); // Rerurns '1' or false
        $hasProjectSection = $request->input('project-section', false); // Returns '1' or false

        // To explicitly get a boolean (true/false):
        $hasIntroSectionBoolean = (bool) $request->input('intro-section'); // true if checked, false if not
        $hasEduSectionBoolean = (bool) $request->input('edu-section');
        $hasAboutSectionBoolean = (bool) $request->input('about-section');
        $hasSkillsSectionBoolean = (bool) $request->input('skills-section');
        $hasProjectSectionBoolean = (bool) $request->input('project-section');

        // You can then use these values to save to your database, etc.
        // For example, if you have a `settings` table for the user:

        $request['user_id'] = auth()->id();

        /*
        $userSettings = UserSetting::firstOrCreate(['user_id' => auth()->id()]);
        $userSettings->show_intro = $hasIntroSectionBoolean;
        $userSettings->show_education = $hasEduSectionBoolean;
        $userSettings->show_about = $hasAboutSectionBoolean;
        $userSettings->save();
        */

        // Searching if value exist
        $hasValue = WebSiteSections::where('user_id', $request->user_id)->get();
        if ($hasValue) { // if true update values
            WebSiteSections::where('user_id', $request->user_id)->update([
                'user_id' => $request->user_id,
                'intorduction_section' => $hasIntroSectionBoolean,
                'education_section' => $hasEduSectionBoolean,
                'about_section' => $hasAboutSectionBoolean,
                'skills_section' => $hasSkillsSectionBoolean,
                'project_section' => $hasProjectSectionBoolean
            ]);
        }

        // Example: Log the values for debugging
        else { 
            // Else create row and insert new valus
            WebSiteSections::create([
                'user_id' => $request->user_id,
                'intorduction_section' => $hasIntroSectionBoolean,
                'education_section' => $hasEduSectionBoolean,
                'about_section' => $hasAboutSectionBoolean,
                'skills_section' => $hasSkillsSectionBoolean,
                'project_section' => $hasProjectSectionBoolean
            ]);
        }

        return redirect('/section-selection');

    }

    public function getSectionsForTemplate(Request $request){
        $request['user_id'] = Auth()->id();
        $hasSections = TemplatesSections::where('id', $request->user_id)->get()->first();
        $selectedSection = WebSiteSections::where('user_id', auth()->id())->get()->first();

        return view('web-section-selection', compact('hasSections', 'selectedSection'));
    }

}
