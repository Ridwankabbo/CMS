@extends('layouts.profile-options')

@section('user-options')

    <div class="bg-light">

        <h2>Select Sections you want to put in your website</h2>

        <form action="/save-selection" method="post">
            @csrf
            @if ($selectedSection)

                <div class="p-4">
                <input type="checkbox" id="intro-checkbox" name="intro-section" @checked($selectedSection->intorduction_section == 1)>
                <label for="intro-checkbox" class="h4">Introduction section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="edu-section" @checked($selectedSection->education_section == 1)>
                <label for="edu-checkbox" class="h4">Education section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="skills-section" @checked($selectedSection->skills_section == 1) >
                <label for="edu-checkbox" class="h4">Skills section </label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="about-checkbox" name="about-section" @checked($selectedSection->about_section == 1)>
                <label for="avout-checkbox" class="h4">About section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="project-section" @checked($selectedSection->project_section == 1)>
                <label for="edu-checkbox" class="h4">Project section</label>
            </div>

            @else
            <div class="p-4">
                <input type="checkbox" id="intro-checkbox" name="intro-section">
                <label for="edu-checkbox" class="h4">Introduction section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="edu-section" >
                <label for="edu-checkbox" class="h4">Education section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="skills-section"  >
                <label for="edu-checkbox" class="h4">Skills section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="about-checkbox" name="about-section" >
                <label for="edu-checkbox" class="h4">About section</label>
            </div>

            <div class="p-4">
                <input type="checkbox" id="edu-checkbox" name="project-section">
                <label for="edu-checkbox" class="h4">Project section</label>
            </div>

            
            @endif
            <div class="p-5">
                <button class="btn btn-dark text-white">save</button>
            </div>
        </form>

    </div>

@endsection