@extends('layouts.profile-options')

@section('user-options')

<section id="posts-section" class="content-section d-none">
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

@endsection