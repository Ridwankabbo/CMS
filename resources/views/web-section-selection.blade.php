@extends('layouts.profile-options')

@section('user-options')

    <div class="bg-light">

        <form action="/save-selection" method="post">
            @csrf
            <div class="p-4">
                <input type="checkbox" id="intro-checkbox" name="intro-section" @checked($selectedSection->intorduction_section == 1)>
                <label for="intro-checkbox">Do you want to add intro to your website</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="edu-section" @checked($selectedSection->education_section == 1)>
                <label for="edu-checkbox">Do you want to add education section to your website</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="skills-section" @checked($selectedSection->skills_section == 1) >
                <label for="edu-checkbox">Do you want to add skills section to your website</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="about-checkbox" name="about-section" @checked($selectedSection->about_section == 1)>
                <label for="avout-checkbox">Do you want to add about to your website</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="project-section" @checked($selectedSection->project_section == 1)>
                <label for="edu-checkbox">Do you want to add project section to your website</label>
            </div>

            <div class="p-5">
                <button class="btn btn-dark text-white">save</button>
            </div>
        </form>

    </div>

@endsection