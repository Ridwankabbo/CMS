@extends('templates.portfolio-4.layout.p4-header-footer')

@section('p4-content')

 <!-- Contact Section -->
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
    </section>
    
@endsection