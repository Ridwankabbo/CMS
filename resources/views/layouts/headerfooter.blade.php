<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CMS Project - Effortless Content Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWTFoEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8; /* Lighter, subtle blue-grey background */
        }
        .navbar-custom {
            background-color: #1a202c; /* Darker, modern navy */
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .navbar-custom .nav-link, .navbar-brand {
            color: #e2e8f0 !important; /* Lighter text for contrast */
            font-weight: 600;
        }
        .navbar-custom .nav-link:hover {
            color: #a0aec0 !important; /* Subtle hover effect */
        }
        .hero-section {
            background: linear-gradient(rgba(26, 32, 44, 0.75), rgba(26, 32, 44, 0.75)), url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 150px 0; /* More vertical space */
            min-height: 85vh; /* Taller hero */
            display: flex;
            align-items: center;
            border-bottom-left-radius: 30px; /* More rounded */
            border-bottom-right-radius: 30px;
            overflow: hidden; /* For potential animations */
        }
        .hero-section h1 {
            font-size: 3.8rem; /* Larger headline */
            font-weight: 800; /* Extra bold */
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero-section p.lead {
            font-size: 1.4rem;
            font-weight: 400;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
        }

        .feature-card, .benefit-card {
            border-radius: 18px; /* Slightly more rounded */
            box-shadow: 0 10px 25px rgba(0,0,0,0.1); /* Stronger shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            background-color: #ffffff;
            height: 100%;
            padding: 2.5rem; /* More padding */
        }
        .feature-card:hover, .benefit-card:hover {
            transform: translateY(-8px); /* More pronounced lift */
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }
        .feature-icon {
            font-size: 3.5rem; /* Larger icons */
            color: #3b82f6; /* Modern blue */
            margin-bottom: 1.5rem;
        }
        .feature-card .card-title {
            font-size: 1.6rem; /* Larger feature titles */
            font-weight: 700;
            color: #2d3748; /* Darker text */
        }
        .feature-card .card-text {
            font-size: 1.05rem;
            color: #718096; /* Muted text */
        }

        .testimonial-card {
            border-radius: 18px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            background-color: #ffffff;
            border: none;
            padding: 2rem;
        }
        .testimonial-card .card-text {
            font-size: 1.2rem;
            font-style: italic;
            color: #4a5568;
        }
        .testimonial-card .blockquote-footer {
            font-size: 0.95rem;
            color: #718096;
        }

        .cta-section {
            background-color: #3b82f6; /* Modern blue for CTA */
            color: white;
            padding: 100px 0;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 3.2rem;
            font-weight: 800;
            margin-bottom: 2rem;
        }
        .cta-section p.lead {
            font-size: 1.3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 3rem;
        }

        .btn-primary-custom {
            background-color: #10b981; /* Vibrant green */
            border-color: #10b981;
            border-radius: 20px;
            padding: 8px 10px;
            font-weight: 700;
            font-size: 1.15rem;
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary-custom:hover {
            background-color: #059669;
            border-color: #059669;
            transform: translateY(-2px);
        }
        .btn-outline-light-custom {
            border-color: #e2e8f0;
            color: #e2e8f0;
            border-radius: 20px;
            padding: 7px 10px;
            font-weight: 700;
            font-size: 1.15rem;
            border-width: 2px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }
        .btn-outline-light-custom:hover {
            background-color: #e2e8f0;
            color: #1a202c;
            transform: translateY(-2px);
        }

        footer {
            background-color: #1a202c;
            color: #e2e8f0;
            padding: 50px 0;
            text-align: center;
        }
        footer a {
            color: #a0aec0;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #e2e8f0;
        }

        /* Message box styling */
        #message-box {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            width: 90%;
            max-width: 600px;
        }
        #message-box.show {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="/">
                <img class="" src="{{url('images/asset/logo.jpg')}}" alt="Logo" height="80px">
                SiteBuilder
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-outline-light-custom ms-lg-3" href="singin">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-primary-custom ms-lg-2" href="singin">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-3 fw-bold mb-4">Take Control of Your Content.</h1>
                    <p class="lead mb-5">
                        Our powerful and intuitive Content Management System simplifies publishing, organization, and growth.
                    </p>
                    <a href="cms_signup_page.html" class="btn btn-primary-custom btn-lg me-3">Get Started Now</a>
                    <a href="#features" class="btn btn-outline-light-custom btn-lg">Explore Features</a>
                </div>
            </div>
        </div>
    </section>

    <section id="welcomepage">
        @yield('main_content')
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; 2024 Your CMS Project. All rights reserved.</p>
            <div class="mt-3">
                <a href="#" class="text-white text-decoration-none mx-2">Privacy Policy</a> |
                <a href="#" class="text-white text-decoration-none mx-2">Terms of Service</a> |
                <a href="#" class="text-white text-decoration-none mx-2">FAQ</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Function to display a message using Bootstrap alerts
        function showMessage(message, type = 'success') {
            const messageBox = document.getElementById('message-box');
            const messageText = document.getElementById('message-text');

            messageText.textContent = message;
            messageBox.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
            messageBox.classList.add('show');

            // Automatically hide after 3 seconds
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(messageBox);
                bsAlert.close();
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Example of how to trigger a message on page load
            // showMessage('Welcome to Your CMS Project!', 'success');
        });
    </script>
</body>
</html>
