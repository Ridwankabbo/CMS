@extends('layouts.profile-options')

@section('user-options')

    <div class="col-10 ">
        <div class="bg-light rounded-4 py-5 px-4 ">
            <div class="row ">
                <div class="col-lg-10 col-xl-6 justify-content-center">

                    <form action="/save" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($datas->isNotEmpty())

                            @foreach ($datas as $data)

                                <section id="profile-section" class="content-section">
                                    <h2 class="h4 fw-bold text-dark">My Profile</h2>
                                    <p>Update your personal information and password.</p>
                                    <form>
                                        <div class="mb-3">
                                            <label for="profileUsername" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="profileUsername" value="user_name" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="profileEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="profileEmail" value="user@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="profileNewPassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="profileNewPassword"
                                                placeholder="Leave blank to keep current">
                                        </div>
                                        <div class="mb-4">
                                            <label for="profileConfirmPassword" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" id="profileConfirmPassword"
                                                placeholder="Confirm new password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </form>
                                </section>


                            @endforeach

                        @else

                            
                            <section id="profile-section" class="content-section d-none">
                                <h2 class="h4 fw-bold text-dark">My Profile</h2>
                                <p>Update your personal information and password.</p>
                                <form>
                                    <div class="mb-3">
                                        <label for="profileUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="profileUsername" value="user_name" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="profileEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="profileEmail" value="user@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="profileNewPassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="profileNewPassword"
                                            placeholder="Leave blank to keep current">
                                    </div>
                                    <div class="mb-4">
                                        <label for="profileConfirmPassword" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="profileConfirmPassword"
                                            placeholder="Confirm new password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </form>
                            </section>

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