@extends('templates.portfolio-4.layout.p4-header-footer')

@section('p4-content')

<!-- About Section -->
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
    </section>
    
@endsection
