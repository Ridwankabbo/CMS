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
            'template_id' => $n
        ]);

        return redirect('/web-templates');
    }



    //Dedicated for update the sections value to the Database
    public function selectSection(Request $request)
    {

        //dd($request);

        $userId = auth()->id();

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
        $hasIntroSection = $request->input('intro_section', false); // Returns '1' or false
        $hasEduSection = $request->input('education_section', false);     // Returns '1' or false
        $hasAboutSection = $request->input('about_section', false); // Returns '1' or false
        $hasSkillsSection = $request->input('skills_section', false); // Rerurns '1' or false
        $hasProjectSection = $request->input('project-section', false); // Returns '1' or false

        // To explicitly get a boolean (true/false):
        $hasIntroSectionBoolean = (bool) $request->input('intro_section'); // true if checked, false if not
        $hasEduSectionBoolean = (bool) $request->input('education_section');
        $hasAboutSectionBoolean = (bool) $request->input('about_section');
        $hasSkillsSectionBoolean = (bool) $request->input('skills_section');
        $hasProjectSectionBoolean = (bool) $request->input('project_section');

        //dd($hasIntroSectionBoolean);

        // You can then use these values to save to your database, etc.
        // For example, if you have a `settings` table for the user:


        /*
        $userSettings = UserSetting::firstOrCreate(['user_id' => auth()->id()]);
        $userSettings->show_intro = $hasIntroSectionBoolean;
        $userSettings->show_education = $hasEduSectionBoolean;
        $userSettings->show_about = $hasAboutSectionBoolean;
        $userSettings->save();
        */

        // $dataToSave = [
        //     'user_id' => $userId,
        //     'intorduction_section' => $hasIntroSectionBoolean,
        //     'education_section' => $hasEduSectionBoolean,
        //     'about_section' => $hasAboutSectionBoolean,
        //     'skills_section' => $hasSkillsSectionBoolean,
        //     'project_section' => $hasProjectSectionBoolean
        // ];

        // Searching if value exist
        $UserSelectionHasValue = WebSiteSections::where('user_id', $userId)->get()->first();
        //dd($request, $hasIntroSectionBoolean, $UserSelectionHasValue);
        if ($UserSelectionHasValue) { // if true update values
            WebSiteSections::where('user_id', $userId)->update([
                'user_id' => $userId,
                'intorduction_section' => $hasIntroSectionBoolean,
                'education_section' => $hasEduSectionBoolean,
                'about_section' => $hasAboutSectionBoolean,
                'skills_section' => $hasSkillsSectionBoolean,
                'project_section' => $hasProjectSectionBoolean

                //$UserSelectionHasValue->update($dataToSave);


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

            //$UserSelectionHasValue->create($dataToSave);
        }

        return redirect('/section-selection');

    }

    public function getSectionsForTemplate(Request $request)
    {
        $request['user_id'] = Auth()->id();
        $userSelectedTemplate = Usersinfo::where('user_id', $request->user_id)->get()->first();
        $hasSections = TemplatesSections::where('template_id', $userSelectedTemplate->template_id)->get()->first();
        $selectedSection = WebSiteSections::where('user_id', $request['user_id'])->get()->first();
        //dd($selectedSection);

        //dd($userSelectedTemplate, $hasSections);

        return view('web-section-selection', compact('hasSections', 'selectedSection'));
    }

}
