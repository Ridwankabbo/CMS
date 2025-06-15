<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Light gray background */
            line-height: 1.6;
            color: #374151; /* Dark gray text */
        }
        /* Custom scroll behavior for smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        /* Style for active navigation link */
        .nav-link.active {
            color: #2563eb; /* Blue color for active link */
            font-weight: 600;
        }
        /* Hide sections by default, show only the active one */
        .page-section {
            display: none;
            padding-top: 80px; /* Offset for fixed header */
            min-height: calc(100vh - 80px); /* Fill remaining viewport height */
        }
        .page-section.active-section {
            display: block;
        }
        /* Responsive images */
        img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem; /* rounded-lg */
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header / Navigation -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold text-gray-800 hover:text-gray-600 transition duration-300">My Portfolio</a>
            <nav class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="home" class="nav-link text-lg text-gray-700 hover:text-blue-600 transition duration-300">Home</a></li>
                    <li><a href="about" class="nav-link text-lg text-gray-700 hover:text-blue-600 transition duration-300">About</a></li>
                    <li><a href="projects" class="nav-link text-lg text-gray-700 hover:text-blue-600 transition duration-300">Portfolio</a></li>
                    <li><a href="contact" class="nav-link text-lg text-gray-700 hover:text-blue-600 transition duration-300">Contact</a></li>
                </ul>
            </nav>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        <!-- Mobile Menu (hidden by default) -->
        <div id="mobile-menu" class="md:hidden bg-white shadow-lg py-4 px-6 hidden">
            <ul class="flex flex-col space-y-4">
                <li><a href="#home" class="nav-link block text-lg text-gray-700 hover:text-blue-600 transition duration-300 py-2">Home</a></li>
                <li><a href="#about" class="nav-link block text-lg text-gray-700 hover:text-blue-600 transition duration-300 py-2">About</a></li>
                <li><a href="#portfolio" class="nav-link block text-lg text-gray-700 hover:text-blue-600 transition duration-300 py-2">Portfolio</a></li>
                <li><a href="#contact" class="nav-link block text-lg text-gray-700 hover:text-blue-600 transition duration-300 py-2">Contact</a></li>
            </ul>
        </div>
    </header>

    {{-- <!-- Home Section -->
    <section id="home" class="page-section active-section bg-gradient-to-r from-blue-500 to-purple-600 text-white flex items-center justify-center text-center p-8 md:p-16">
        <div class="max-w-4xl">
            <img src="https://placehold.co/150x150/ffffff/000000?text=JD" alt="Profile Picture" class="rounded-full w-36 h-36 mx-auto mb-6 border-4 border-white shadow-lg">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-fade-in-down">Hi, I'm John Doe</h1>
            <p class="text-xl md:text-2xl font-light mb-8 animate-fade-in-up">A passionate <span class="font-semibold">Web Developer</span> building amazing things.</p>
            <a href="#portfolio" class="inline-block bg-white text-blue-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-100 transition duration-300 animate-zoom-in">View My Work</a>
        </div>
    </section> --}}


    <section>
        @yield('p4-content')
    </section>

    {{-- <!-- About Section -->
    <section id="about" class="page-section bg-white p-8 md:p-16">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">About Me</h2>
            <div class="flex flex-col md:flex-row items-center md:space-x-8">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <img src="https://placehold.co/300x400/ececec/6b7280?text=About+Image" alt="About Me" class="rounded-lg shadow-lg">
                </div>
                <div class="md:w-2/3 text-lg text-gray-700">
                    <p class="mb-4">
                        Hello! I'm John Doe, a dedicated web developer with 5+ years of experience in crafting dynamic and responsive web applications. I specialize in front-end development, bringing designs to life with clean, efficient code. My expertise includes **HTML5, CSS3, JavaScript, React, and Tailwind CSS.**
                    </p>
                    <p class="mb-4">
                        I love solving complex problems and creating intuitive user experiences. My goal is to build web solutions that are not only visually appealing but also highly functional and user-friendly. I am constantly learning new technologies and best practices to stay at the forefront of web development.
                    </p>
                    <p>
                        Outside of coding, I enjoy hiking, photography, and exploring new coffee shops. I'm always open to new opportunities and collaborations!
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <!-- Portfolio Section -->
    <section id="portfolio" class="page-section bg-gray-100 p-8 md:p-16">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">My Work</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+1" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">E-commerce Website</h3>
                        <p class="text-gray-600 text-sm mb-4">A responsive e-commerce platform built with React and Tailwind CSS, featuring a dynamic product catalog and shopping cart functionality.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+2" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">CMS Admin Dashboard</h3>
                        <p class="text-gray-600 text-sm mb-4">An intuitive content management system admin dashboard, providing tools for managing posts, users, and categories.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+3" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Bus Seat Booking System</h3>
                        <p class="text-gray-600 text-sm mb-4">A front-end interface for bus seat selection, allowing users to choose their desired seats before booking their trip.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
                <!-- Project Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+4" alt="Project 4" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Creative Portfolio Site</h3>
                        <p class="text-gray-600 text-sm mb-4">A visually striking portfolio site showcasing various creative projects with a focus on modern design and animations.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
                <!-- Project Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+5" alt="Project 5" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Mobile-First Blog</h3>
                        <p class="text-gray-600 text-sm mb-4">A fully responsive blog platform designed with a mobile-first approach, ensuring optimal viewing across all devices.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
                 <!-- Project Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition transform hover:scale-105 duration-300">
                    <img src="https://placehold.co/400x250/d1d5db/374151?text=Project+6" alt="Project 6" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Interactive Data Dashboard</h3>
                        <p class="text-gray-600 text-sm mb-4">A dashboard showcasing interactive data visualizations, allowing users to filter and analyze information dynamically.</p>
                        <a href="#" class="text-blue-600 hover:underline font-medium">View Project &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <!-- Contact Section -->
    <section id="contact" class="page-section bg-white p-8 md:p-16">
        <div class="container mx-auto max-w-xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Get In Touch</h2>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Name" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="your.email@example.com" required>
                </div>
                <div>
                    <label for="subject" class="block text-gray-700 text-sm font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Subject of your message" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 text-sm font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your message..." required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 px-6 rounded-md hover:bg-blue-700 transition duration-300 shadow-md">Send Message</button>
            </form>
        </div>
    </section> --}}

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 text-center">
        <div class="container mx-auto px-6">
            <p>&copy; 2025 John Doe. All rights reserved.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" class="text-gray-300 hover:text-white transition duration-300">
                    <!-- Example Social Icon (replace with actual SVG/Font Awesome) -->
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.362 7.78a.75.75 0 011.06 1.06l-4 4a.75.75 0 01-1.06 0l-2-2a.75.75 0 111.06-1.06L11.5 12.939l3.302-3.302z"/></svg>
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition duration-300">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm-2 16h-2V9h2v9zm6 0h-2v-3h-2v3h-2V9h2v3h2V9h2v9z"/></svg>
                </a>
            </div>
        </div>
    </footer>

    {{-- <script>
        // --- Navigation Logic ---
        const navLinks = document.querySelectorAll('.nav-link');
        const pageSections = document.querySelectorAll('.page-section');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        function showSection(sectionId) {
            // Hide all sections
            pageSections.forEach(section => {
                section.classList.remove('active-section');
            });
            // Show the target section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.add('active-section');
            }

            // Update active class for nav links
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });

            // Close mobile menu if open
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        }

        // Set initial active section based on URL hash or default to 'home'
        const initialHash = window.location.hash.substring(1);
        if (initialHash && document.getElementById(initialHash)) {
            showSection(initialHash);
        } else {
            showSection('home');
        }

        // Add event listeners to navigation links
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default hash behavior
                const sectionId = link.getAttribute('href').substring(1);
                showSection(sectionId);
                // Update URL hash without causing a page reload
                history.pushState(null, '', `#${sectionId}`);
            });
        });

        // Handle browser back/forward buttons
        window.addEventListener('popstate', () => {
            const currentHash = window.location.hash.substring(1);
            if (currentHash && document.getElementById(currentHash)) {
                showSection(currentHash);
            } else {
                showSection('home');
            }
        });

        // --- Mobile Menu Toggle ---
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside (optional, but good UX)
        document.addEventListener('click', (event) => {
            const isClickInsideMobileMenu = mobileMenu.contains(event.target) || mobileMenuButton.contains(event.target);
            if (!mobileMenu.classList.contains('hidden') && !isClickInsideMobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script> --}}
</body>
</html>

