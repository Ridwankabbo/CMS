@extends('templates.portfolio-4.layout.p4-header-footer')

@section('p4-content')

<!-- Home Section -->
    <section id="home" class="page-section active-section bg-gradient-to-r from-blue-500 to-purple-600 text-white flex items-center justify-center text-center p-8 md:p-16">
        <div class="max-w-4xl">
            <img src="https://placehold.co/150x150/ffffff/000000?text=JD" alt="Profile Picture" class="rounded-full w-36 h-36 mx-auto mb-6 border-4 border-white shadow-lg">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-fade-in-down">Hi, I'm John Doe</h1>
            <p class="text-xl md:text-2xl font-light mb-8 animate-fade-in-up">A passionate <span class="font-semibold">Web Developer</span> building amazing things.</p>
            <a href="#portfolio" class="inline-block bg-white text-blue-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-100 transition duration-300 animate-zoom-in">View My Work</a>
        </div>
    </section>
    
@endsection
