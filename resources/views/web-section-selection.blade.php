@extends('layouts.profile-options')

@section('user-options')

    <div class="">

        <h2>Select Sections you want to put in your website</h2>

        <form action="/save-selection" method="post">
            @csrf
            @if ($hasSections)

                {{-- Check if Intro section exists and display its checkbox --}}
                @if ($hasSections->Intro)
                    <div class="p-4">
                        <input type="checkbox" id="intro-checkbox" name="intro_section"
                            @checked($selectedSection->intorduction_section == 1)>
                        <label for="intro-checkbox" class="h4">Introduction section</label>
                    </div>
                @endif

                {{-- Check if Education_form section exists and display its checkbox --}}
                @if ($hasSections->Education_form)
                    <div class="p-4">
                        <input type="checkbox" id="edu-checkbox" name="education_section"
                            @checked($selectedSection->education_section == 1)>
                        <label for="edu-checkbox" class="h4">Education section</label>
                    </div>
                @endif

                {{-- Check if Skills section exists and display its checkbox --}}
                @if ($hasSections->Skills)
                    <div class="p-4">
                        <input type="checkbox" id="skills-checkbox" name="skills_section" {{-- Changed ID for uniqueness --}}
                            @checked($selectedSection->skills_section == 1)>
                        <label for="skills-checkbox" class="h4">Skills section </label> {{-- Changed label for uniqueness --}}
                    </div>
                @endif

                {{-- Check if About section exists and display its checkbox --}}
                @if ($hasSections->About)
                    <div class="p-4">
                        <input type="checkbox" id="about-checkbox" name="about_section"
                            @checked($selectedSection->about_section == 1)>
                        <label for="about-checkbox" class="h4">About section</label>
                    </div>
                @endif

                {{-- Check if Projects section exists and display its checkbox --}}
                @if ($hasSections->Projects)
                    <div class="p-4">
                        <input type="checkbox" id="project-checkbox" name="project_section" {{-- Changed ID for uniqueness --}}
                            @checked($selectedSection->project_section == 1)>
                        <label for="project-checkbox" class="h4">Project section</label> {{-- Changed label for uniqueness --}}
                    </div>
                @endif


            @else
                {{-- Check if Intro section exists and display its checkbox --}}
                @if ($hasSections->Intro)
                    <div class="p-4">
                        <input type="checkbox" id="intro-checkbox" name="intro_section"
                            @checked($selectedSection->intorduction_section == 1)>
                        <label for="intro-checkbox" class="h4">Introduction section</label>
                    </div>
                @endif

                {{-- Check if Education_form section exists and display its checkbox --}}
                @if ($hasSections->Education_form)
                    <div class="p-4">
                        <input type="checkbox" id="edu-checkbox" name="education_section"
                            @checked($selectedSection->education_section == 1)>
                        <label for="edu-checkbox" class="h4">Education section</label>
                    </div>
                @endif

                {{-- Check if Skills section exists and display its checkbox --}}
                @if ($hasSections->Skills)
                    <div class="p-4">
                        <input type="checkbox" id="skills-checkbox" name="skills_section"
                            @checked($selectedSection->skills_section == 1)>
                        <label for="skills-checkbox" class="h4">Skills section </label> 
                    </div>
                @endif

                {{-- Check if About section exists and display its checkbox --}}
                @if ($hasSections->About)
                    <div class="p-4">
                        <input type="checkbox" id="about-checkbox" name="about_section"
                            @checked($selectedSection->about_section == 1)>
                        <label for="about-checkbox" class="h4">About section</label>
                    </div>
                @endif

                {{-- Check if Projects section exists and display its checkbox --}}
                @if ($hasSections->Projects)
                    <div class="p-4">
                        <input type="checkbox" id="project-checkbox" name="project_section" 
                            @checked($selectedSection->project_section == 1)>
                        <label for="project-checkbox" class="h4">Project section</label> 
                    </div>
                @endif


            @endif
            <div class="p-5">
                <button class="btn btn-success text-white">save</button>
            </div>
        </form>

    </div>

@endsection