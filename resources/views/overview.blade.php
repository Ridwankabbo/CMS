@extends('layouts.profile-options')

@section('user-options')

<!-- Main Content -->
        <div class="main-content">
            <header class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
                <h1 id="page-title" class="h3 fw-bold text-dark">Overview</h1>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle rounded-pill" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-2"></i> User Name
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#" data-section="profile"><i class="fas fa-user me-2"></i> Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="cms_login_page.html"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </header>

            <!-- Overview Section -->
            <section id="overview-section" class="content-section">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
                    <div class="col">
                        <div class="card card-custom h-100 bg-primary text-white">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center p-4">
                                <i class="fas fa-file-alt fa-3x mb-3"></i>
                                <h5 class="card-title fw-bold">Total Posts</h5>
                                <p class="card-text fs-2 fw-bold">45</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-custom h-100 bg-success text-white">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center p-4">
                                <i class="fas fa-eye fa-3x mb-3"></i>
                                <h5 class="card-title fw-bold">Total Views</h5>
                                <p class="card-text fs-2 fw-bold">12,345</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-custom h-100 bg-info text-white">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center p-4">
                                <i class="fas fa-comments fa-3x mb-3"></i>
                                <h5 class="card-title fw-bold">Pending Comments</h5>
                                <p class="card-text fs-2 fw-bold">7</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom p-4">
                    <h4 class="mb-4 text-dark fw-bold">Recent Activity</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            New post "Getting Started with CMS" published.
                            <span class="badge bg-primary rounded-pill">Just now</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Comment received on "My Latest Article".
                            <span class="badge bg-warning text-dark rounded-pill">5 min ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Profile updated successfully.
                            <span class="badge bg-info rounded-pill">1 hour ago</span>
                        </li>
                    </ul>
                </div>
            </section>

@endsection
