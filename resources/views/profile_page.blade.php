@extends('layouts.profile-options')

@section('user-options')

    <div class="col-10 ">
        <div class="bg-light rounded-4 py-5 px-4 ">
            <div class="row ">
                <div class="col-lg-10 col-xl-6 justify-content-center">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->


                    <form action="/save" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($datas->isNotEmpty())

                            @foreach ($datas as $data)

                                <div class="mb-5 ">
                                    <label for="logo" class="form-label">Title</label>
                                    <input type="text" class="form-control form-control-lg" id="title"
                                        placeholder="Enter title or typography logo" name="title" value="{{$data->title}}">


                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Introduction text</label>


                                    <textarea class="form-control form-control-lg" name="intro_text"
                                        placeholder="Enter some introduction text">{{$data->intro_text}}</textarea>
                                </div>
                                <div class="mb-5">
                                    <label for="pwd" class="form-label">Choose your image:</label>
                                    <input class="form-control form-control-lg" type="file" name="image" width="48" height="48"
                                        value="{{$data->image}}">
                                </div>

                                <div class="mb-5">
                                    <label for="pwd" class="form-label">Choose your school image:</label>
                                    <input class="form-control form-control-lg" type="file" name="school_image" width="48"
                                        height="48" value="{{$data->image}}">
                                </div>

                                <div class="mb-5">
                                    <label for="pwd" class="form-label">Choose your collage image:</label>
                                    <input class="form-control form-control-lg" type="file" name="collage_image" width="48"
                                        height="48" value="{{$data->image}}">
                                </div>

                                <div class="mb-5">
                                    <label for="pwd" class="form-label">Choose your university image:</label>
                                    <input class="form-control form-control-lg" type="file" name="university_image" width="48"
                                        height="48" value="{{$data->image}}">
                                </div>


                                <div class="mb-5">
                                    <label for="email" class="form-label">About Yourself:</label>


                                    <textarea class="form-control form-control-lg" name="about"
                                        placeholder="Write somethis about yourself">{{$data->about}}</textarea>
                                </div>
                                <div class="mb-5">
                                    <label for="logo" class="form-label">Mobile:</label>
                                    <input type="number" class="form-control form-control-lg" id="phone"
                                        placeholder="Enter your number" name="phone" value="{{$data->phone}}">

                                </div>


                            @endforeach

                            @foreach ($projectsdata as $projectdata)

                                <div class="mb-5">
                                    <label for="project_name" class="form-label">Add new project</label>
                                    <input class="form-control form-control-lg mb-4" name="project_name" type="text"
                                        value="{{$projectdata->project_name}}" placeholder="project name">
                                    <label for="porject_image">Enter project logo or image</label>
                                    <input class="form-control form-control-lg mb-4" type="file" name="project_image" width="48"
                                        height="48">
                                    <label for="project_git_url">Enter project git or domail url</label>
                                    <input type="text" class="form-control form-control-lg mb-4"
                                        value="{{$projectdata->project_git_url}}" name="project_git_url">

                                </div>

                            @endforeach

                        @else

                            <div class="mb-5">
                                <label for="logo" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-lg" id="title"
                                    placeholder="Enter title or typography logo" name="title">


                            </div>
                            <div class="mb-5">
                                <label class="form-label">Introduction text</label>


                                <textarea class="form-control form-control-lg" name="intro_text"
                                    placeholder="Enter some introduction text"></textarea>
                            </div>
                            <div class="mb-5">
                                <label for="pwd" class="form-label">Choose your image:</label>
                                <input class="form-control form-control-lg" type="file" name="image" width="48" height="48"
                                    value="">
                            </div>

                            <div class="mb-5">
                                <label for="pwd" class="form-label">Choose your school image:</label>
                                <input class="form-control form-control-lg" type="file" name="school_image" width="48"
                                    height="48" value="">
                            </div>

                            <div class="mb-5">
                                <label for="pwd" class="form-label">Choose your collage image:</label>
                                <input class="form-control form-control-lg" type="file" name="collage_image" width="48"
                                    height="48" value="">
                            </div>

                            <div class="mb-5">
                                <label for="pwd" class="form-label">Choose your univesity image:</label>
                                <input class="form-control form-control-lg" type="file" name="university_image" width="48"
                                    height="48" value="">
                            </div>


                            <div class="mb-5">
                                <label for="email" class="form-label">About Yourself:</label>


                                <textarea class="form-control form-control-lg" name="about"
                                    placeholder="Write somethis about yourself"></textarea>
                            </div>
                            <div class="mb-5">
                                <label for="logo" class="form-label">Mobile:</label>
                                <input type="number" class="form-control form-control-lg" id="email"
                                    placeholder="Enter your number" name="phone" value="">

                            </div>

                            <div class="mb-5">
                                <label for="project_name" class="form-label">Add new project</label>
                                <input class="form-control form-control-lg mb-4" name="project_name" type="text"
                                    name="project_image" placeholder="project name">
                                <label for="porject_image">Enter project logo or image</label>
                                <input class="form-control form-control-lg mb-4" type="file" name="project_image" width="48"
                                    height="48">
                                <label for="project_git_url">Enter project git or domail url</label>
                                <input type="text" class="form-control form-control-lg mb-4" name="project_git_url">

                            </div>

                        @endif

                        <div class="d-grid">
                            <Button class="btn btn-lg text-white bg-dark" id="submitButton" type="submit">save</Button>
                        </div>



                    </form>

                    <div class="mt-5">
                        <a href="http://localhost:8000/templates/portfolio/home" target="_blank"
                            class="btn bg-dark text-white">Click heare to vesit your profile</a>
                    </div>
                </div>

                <div>
                    <form action="/logout" method="get">
                        @csrf
                        <div class="d-grid" style="justify-content: end">
                            <Button class="btn  text-white bg-dark" id="submitButton" type="submit">Log out</Button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection