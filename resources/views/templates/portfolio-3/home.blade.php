@extends('templates.portfolio-3.header-footer')


@section('main-content')

    @if ($selectedSection->intorduction_section == 1)

        <header>
            <img src="{{url("images/users/$userPortfolio->image")}}" alt="Profile Picture" class="profile-image">
            <h1>{{$userPortfolio->title}}</h1>
            <p>{{$userPortfolio->intro_text}}</p>
        </header>
    @endif
    @if($selectedSection->about_section == 1)


        <section class="section about" id="about">
            <h2>About Me</h2>
            <div class="about-me">
                <p>
                    {{$userPortfolio->about}}
                </p>
            </div>
        </section>
    @endif
    @if($selectedSection->project_section == 1)

        <section class="section projects" id="projects">
            <h2>Projects</h2>

            @foreach ($usersProjects as $project)

                <div class="projects">
                    <div class="project-card">
                        <img src="{{url("images/users/$project->project_img")}}" style="padding-left: 50px;" height="200px"
                            width="200px" alt="">
                        <h3>{{$project->project_name}}</h3>
                        <a href="{{$project->project_git_url}}" target="__blank">View Project</a>
                    </div>
                </div>

            @endforeach

        </section>


    @endif
    <section class="section contact" id="contact">
        <h2>Contact Me</h2>
        <p>Email: john.doe@example.com</p>
        <p>Phone: {{$userPortfolio->phone}}</p>
    </section>



@endsection