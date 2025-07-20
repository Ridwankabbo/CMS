@extends('layouts.headerfooter')
@section('main_content')
<!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center mb-5 fw-bold display-5 text-dark">Core Features Designed for You</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100 p-4 text-center feature-card">
                        <i class="fas fa-edit feature-icon"></i>
                        <div class="card-body">
                            <h3 class="card-title fw-bold mb-3 fs-5 text-dark">Intuitive Editor</h3>
                            <p class="card-text text-muted">Create and manage content with a simple, yet powerful WYSIWYG editor.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 text-center feature-card">
                        <i class="fas fa-users-cog feature-icon"></i>
                        <div class="card-body">
                            <h3 class="card-title fw-bold mb-3 fs-5 text-dark">User & Role Management</h3>
                            <p class="card-text text-muted">Define roles, permissions, and easily manage your team's access.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 text-center feature-card">
                        <i class="fas fa-cogs feature-icon"></i>
                        <div class="card-body">
                            <h3 class="card-title fw-bold mb-3 fs-5 text-dark">Customizable Templates</h3>
                            <p class="card-text text-muted">Tailor the look and feel of your site to match your brand perfectly.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 p-4 text-center feature-card">
                        <i class="fas fa-mobile-alt feature-icon"></i>
                        <div class="card-body">
                            <h3 class="card-title fw-bold mb-3 fs-5 text-dark">Responsive Content</h3>
                            <p class="card-text text-muted">Your content looks stunning on any device, from desktop to mobile.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-5 bg-white">
        <div class="container py-5">
            <h2 class="text-center mb-5 fw-bold display-5 text-dark">Benefits That Drive Your Success</h2>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="https://images.unsplash.com/photo-1557804506-669b3793f717?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-lg shadow-lg mb-4 mb-md-0" alt="Streamlined Workflow">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="fw-bold mb-3 text-dark">Streamline Your Publishing Workflow</h3>
                    <p class="lead text-muted">Reduce the time and effort required to publish new content. Our CMS is designed for efficiency, letting you focus on creating great material.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1516321497487-e288ad719374?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-lg shadow-lg mb-4 mb-md-0" alt="Full Content Control">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3 text-dark">Gain Full Control Over Your Digital Presence</h3>
                    <p class="lead text-muted">Manage every aspect of your website's content, structure, and appearance without needing technical expertise. Empower your team with robust tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center mb-5 fw-bold display-5 text-dark">What Our Clients Say</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card p-4 testimonial-card">
                        <div class="card-body">
                            <p class="card-text fst-italic mb-3 fs-5 text-muted">"This CMS made our content updates a breeze. The interface is incredibly intuitive, and our team adapted instantly. A real game-changer!"</p>
                            <footer class="blockquote-footer fs-6 text-dark">Sarah J., <cite title="Source Title">Marketing Director</cite></footer>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-4 testimonial-card">
                        <div class="card-body">
                            <p class="card-text fst-italic mb-3 fs-5 text-muted">"Finally, a CMS that understands our needs. The flexibility in customization is unmatched, allowing us to truly own our online presence."</p>
                            <footer class="blockquote-footer fs-6 text-dark">Mark T., <cite title="Source Title">Web Developer</cite></footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="contact" class="cta-section text-center">
        <div class="container py-5">
            <h2 class="display-4 fw-bold mb-4">Ready to Transform Your Content?</h2>
            <p class="lead mb-5">Join our growing community of successful content creators and simplify your digital life.</p>
            <a href="cms_signup_page.html" class="btn btn-primary-custom btn-lg">Sign Up Now</a>
            <a href="mailto:info@yourcms.com" class="btn btn-outline-light-custom btn-lg ms-3">Contact Sales</a>
        </div>
    </section>

@endsection