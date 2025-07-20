@extends('layouts.profile-options')

@section('user-options')

<section id="media-section" class="content-section d-none">
                <h2 class="h4 fw-bold text-dark">Media Library</h2>
                <p>Upload and manage your images, videos, and documents.</p>
                <button class="btn btn-primary"><i class="fas fa-upload me-2"></i> Upload Media</button>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 mt-4">
                    <div class="col">
                        <div class="card">
                            <img src="https://placehold.co/150x100/ced4da/6c757d?text=Image+1" class="card-img-top" alt="Media 1">
                            <div class="card-body p-2 text-center">
                                <small class="text-muted">image1.jpg</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://placehold.co/150x100/ced4da/6c757d?text=Image+2" class="card-img-top" alt="Media 2">
                            <div class="card-body p-2 text-center">
                                <small class="text-muted">image2.png</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
