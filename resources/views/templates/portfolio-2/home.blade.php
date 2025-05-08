@extends('templates.portfolio-2.header-footer')

@section('main-body')

    <div id="intro-details">

        <div class="intro-text">
            <h1 id="intro"><span>Hi,</span> I'm </h1>
            <p id="slowgun">Let's make somethis new</p>

        </div>

        <div id="intro-image">
            <img src="{{url('images/hello_world.png')}}" alt="Exampla img" height="220px">
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
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                  
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                 
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                  
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
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                  
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                 
                </div>
            </div>
        </div>
    </div>

@endsection
