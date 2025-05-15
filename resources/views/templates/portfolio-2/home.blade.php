@extends('templates.portfolio-2.header-footer')

@section('main-body')

    <div id="intro-details">

        <div class="intro-text">
            <h1 id="intro"><span>Hi,</span> I'm {{$portfolio->title}}</h1>
            <p id="slowgun">{{$portfolio->intro_text}}</p>

        </div>

        <div id="intro-image">
            <img src="{{url("images/users/$portfolio->image")}}" alt="Example img" height="220px">
        </div>

    </div>

    <div id="skills-section">
        <div>
            <h1 id="heading">Skills</h1>
        </div>
        <div class="skills">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>
        </div>
    </div>

    <div id="education-section">
        <div class="heading">
            <h1>Education</h1>
        </div>

        <div class="educated-from">

            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{url("images/users/$portfolio->school_img")}}" alt="">
                    <h5 class="card-title p-4">School</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{url("images/users/$portfolio->collage_img")}}" alt="">
                    <h5 class="card-title p-4 ">Collage</h5>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{url("images/users/$portfolio->university_img")}}" alt="">
                    <h5 class="card-title p-4 ">University</h5>
                </div>
            </div>
        </div>
    </div>

@endsection