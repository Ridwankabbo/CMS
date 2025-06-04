@extends('templates.portfolio-2.header-footer')

@section('main-body')

    @if ($selectedSection->intorduction_section == 1)

        <div id="intro-details">

            <div class="intro-text">
                <h1 id="intro"><span>Hi,</span> I'm {{$userPortfolio->title}}</h1>
                <p id="slowgun">{{$userPortfolio->intro_text}}</p>

            </div>

            <div id="intro-image">
                <img src="{{url("images/users/$userPortfolio->image")}}" alt="Example img" height="220px">
            </div>

        </div>

    @endif

    @if ($selectedSection->skills_section == 1)
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
    @endif

    @if ($selectedSection->education_section)
        <div id="education-section">
            <div class="heading">
                <h1>Education</h1>
            </div>

            <div class="educated-from">

                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="{{url("images/users/$userPortfolio->school_img")}}" alt="">
                        <h5 class="card-title p-4">School</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="{{url("images/users/$userPortfolio->collage_img")}}" alt="">
                        <h5 class="card-title p-4 ">Collage</h5>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <img src="{{url("images/users/$userPortfolio->university_img")}}" alt="">
                        <h5 class="card-title p-4 ">University</h5>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection