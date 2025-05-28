@extends('templates.portfolio-3.header-footer')


@section('main-content')

    <header>
        <img src="{{url("images/users/$userPortfolio->image")}}" alt="Profile Picture" class="profile-image">
        <h1>{{$userPortfolio->title}}</h1>
        <p>{{$userPortfolio->intro_text}}</p>
    </header>

    <section class="section about" id="about">
        <h2>About Me</h2>
        <div class="about-me">
            <p>
                {{$userPortfolio->about}}
            </p>
        </div>
    </section>

    <section class="section projects" id="projects">
        <h2>Projects</h2>
        @if ($usersproject)
            <div class="projects">
                <div class="project-card">
                    <img src="{{url("images/users/$usersproject->project_img")}}" height="300px" width="300px" alt="">
                    <h3>{{$usersproject->project_name}}</h3>
                    <a href="{{$usersproject->project_git_url}}" target="__blank">View Project</a>
                </div>
            </div>
        @else

            <div class="projects">
                <div class="project-card">
                    <img src="" height="300px" width="300px" alt="">
                    <h3>project name </h3>
                    <a href="" target="__blank">View Project</a>
                </div>
            </div>

        @endif
    </section>

    <section class="section contact" id="contact">
        <h2>Contact Me</h2>
        <p>Email: john.doe@example.com</p>
        <p>Phone: {{$userPortfolio->phone}}</p>
    </section>

@endsection