@extends('layouts.profile-options');

@section('user-options')

        <div>
            <div class="mt-3 pb-3">
                <h2>Projects list</h2>
            </div>
            <table class="table table-striped">
            <tr>
                <th>Project no.</th>
                <th>Project name</th>
                <th>project logo</th>
                <th>Project url</th>
            </tr>
            @foreach ($projectsdata as $projectdata)
                <tr>
                    <td>{{$projectdata->id}}</td>
                    <td>{{$projectdata->project_name}}</td>
                    <td><img src="{{url("images/users/$projectdata->project_img")}}" height="50px" width="50px" alt=""></td>
                    <td>{{$projectdata->project_git_url}}</td>
                </tr>

            @endforeach
        </table>
        </div>

   
        

        <div>
            <div>
                <h3 class="mt-5 pb-3">Add new Project</h3>
            </div>
            <form action="add-new-project" method="post" enctype="multipart/form-data">
            @csrf
            <input type="checkbox" id="project-checkbox">
            <label for="project-checkbox">Do you want to add project section to your website</label>
            <div class="mb-5" id="project-section">
                <label for="project_name" class="form-label">Add new project</label>
                <input class="form-control form-control-lg mb-4" name="project_name" type="text"
                    placeholder="project name">
                <label for="porject_image">Enter project logo or image</label>
                <input class="form-control form-control-lg mb-4" type="file" name="project_image" width="48" height="48">
                <label for="project_git_url">Enter project git or domail url</label>
                <input type="text" class="form-control form-control-lg mb-4" name="project_git_url">

            </div>

            <div class="d-grid" style="justify-content: end">
                <Button class="btn  text-white bg-dark" id="submitButton" type="submit">add new</Button>
            </div>
        </form>
        </div>

        



@endsection