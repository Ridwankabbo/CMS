@extends('templates.portfolio-4.layout.p4-header-footer')

@section('p4-content')

<!-- Project Section -->
    <section id="project" class="page-section bg-gray-100 p-8 md:p-16">
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
            </div>
        </div>
    </section>
    
@endsection