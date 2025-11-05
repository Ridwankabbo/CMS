@extends('layouts.profile-options')

@section('user-options')

    <section id="posts-section" class="content-section">
        <section>
            <h2 class="h4 fw-bold text-dark">My Posts</h2>
            <p>Manage your articles, blog posts, and pages here.</p>
            <button class="btn btn-primary"><i class="fas fa-plus me-2"></i> Create New Post</button>
            <div class="table-responsive mt-4">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Introduction to CMS</td>
                            <td><span class="badge bg-success">Published</span></td>
                            <td>2024-07-20</td>
                            <td>
                                <button class="btn btn-sm btn-info text-white me-2"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark me-2"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Advanced CMS Features</td>
                            <td><span class="badge bg-warning text-dark">Draft</span></td>
                            <td>2024-07-18</td>
                            <td>
                                <button class="btn btn-sm btn-info text-white me-2"><i class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark me-2"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="pt-5 pb-5">
            <h2> Post Projects</h2>

            <div>
                <div class="mt-3 pb-3">
                    {{-- <h2>Projects list</h2> --}}
                </div>
                <table class="table table-striped">
                    <tr>
                        {{-- <th>Project no.</th> --}}
                        <th>Project name</th>
                        <th>project logo</th>
                        <th>Project url</th>
                    </tr>
                    @foreach ($projectsdata as $projectdata)
                        <tr>
                            {{-- <td>{{$projectdata->id}}</td> --}}
                            <td>{{$projectdata->project_name}}</td>
                            <td><img src="{{url("images/users/$projectdata->project_img")}}" height="50px" width="50px" alt="">
                            </td>
                            <td>
                                {{$projectdata->project_git_url}}

                            </td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning text-dark me-2"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('/delete.project', ['id' => $projectdata->id]) }}"
                                    class="btn btn-danger text-white text-center"><i class="fas fa-trash"></i></a>
                            </td>
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
                    {{-- <input type="checkbox" id="project-checkbox">
                    <label for="project-checkbox">Do you want to add project section to your website</label> --}}
                    <div class="mb-5" id="project-section">
                        <label for="project_name" class="form-label">Add new project</label>
                        <input class="form-control form-control-lg mb-4" name="project_name" type="text"
                            placeholder="project name">
                        <label for="project_type" class="form-label">Project type </label>
                        <input class="form-control form-control-lg mb-4" name="project_type" type="text"
                            placeholder="project type">
                        <label for="porject_image">Enter project logo or image</label>
                        <input class="form-control form-control-lg mb-4" type="file" name="project_image" width="48"
                            height="48">
                        <label for="project_git_url">Enter project git or domail url</label>
                        <input type="text" class="form-control form-control-lg mb-4" name="project_git_url">

                    </div>

                    <div class="d-grid" style="justify-content: end">
                        <Button class="btn  text-white bg-success" id="submitButton" type="submit">add new</Button>
                    </div>
                </form>
            </div>


        </section>

@endsection