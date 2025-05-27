@extends('templates.portfolio-3.header-footer')


@section('main-content')

    <header>
        <img src="{{url("images/users/$portfolio->image")}}" alt="Profile Picture" class="profile-image">
        <h1>{{$portfolio->title}}</h1>
        <p>{{$portfolio->intro_text}}</p>
    </header>

    <section class="section about" id="about">
        <h2>About Me</h2>
        <div class="about-me">
            <p>
                {{$portfolio->about}}
            </p>
        </div>
    </section>

    <section class="section projects" id="projects">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project-card">
                <p>A brief description of Project 1. This project was built using HTML, CSS, and JavaScript.</p>
                <h3>Project 1</h3>
                <a href="#">View Project</a>
            </div>
            <div class="project-card">
                <p>A description of Project 2. This project was a Laravel project.</p>
                <h3>Project 2</h3>
                <a href="#">View Project</a>
            </div>
            <div class="project-card">
                <h3>Project 3</h3>
                <p>A description of Project 3. A Vue.js project.</p>
                <a href="#">View Project</a>
            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <h2>Contact Me</h2>
        <p>Email: john.doe@example.com</p>
        <p>Phone: +123 456 7890</p>
    </section>

@endsection