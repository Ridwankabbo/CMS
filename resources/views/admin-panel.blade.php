@extends('layouts.admin-panel-layout')

@section('dashboard-section-body')

    <main class="flex-1 p-6">
        @if (count($admin_datas) > 0)


            @foreach ($admin_datas as $data)

                {{-- <header class="bg-white rounded-md shadow-md p-4 mb-6 flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                    <div class="user-profile flex items-center space-x-4">
                        <span class="text-gray-700">Welcome, {{$admin_data->name}}</span>
                        <img src="{{url("images/admins/$admin_data->image")}}" alt="Admin Profile" class="rounded-full h-10 w-10">
                        <a href="/logout" id="logout-button"
                            class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Logout</a>
                    </div>
                </header> --}}

                <div class="content">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                        <div class="bg-white rounded-md shadow-md p-4">
                            <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Posts</h2>
                            <div class="text-2xl font-bold text-blue-500">125</div>
                        </div>
                        <div class="bg-white rounded-md shadow-md p-4">
                            <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Users</h2>
                            <div class="text-2xl font-bold text-green-500">50</div>
                        </div>
                        <div class="bg-white rounded-md shadow-md p-4">
                            <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Categories</h2>
                            <div class="text-2xl font-bold text-purple-500">15</div>
                        </div>
                    </div>

                    <div class="bg-white rounded-md shadow-md p-6">
                        <h2 class="text-xl font-semibold mb-4">Recent Posts</h2>
                        <ul class="space-y-2">
                            <li class="border-b border-gray-200 py-2">
                                <a href="/post/1" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 1</a>
                                <span class="text-gray-500 text-sm ml-4">Published: 2024-07-28</span>
                            </li>
                            <li class="border-b border-gray-200 py-2">
                                <a href="/post/2" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 2</a>
                                <span class="text-gray-500 text-sm ml-4">Published: 2024-07-27</span>
                            </li>
                            <li class="border-b border-gray-200 py-2">
                                <a href="/post/3" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 3</a>
                                <span class="text-gray-500 text-sm ml-4">Published: 2024-07-26</span>
                            </li>
                        </ul>
                        <a href="/posts"
                            class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">View
                            All Posts</a>
                    </div>
                </div>

            @endforeach

        @else

            <header class="bg-white rounded-md shadow-md p-4 mb-6 flex justify-between items-center">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="user-profile flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, Admin</span>
                    <img src="https://via.placeholder.com/40" alt="Admin Profile" class="rounded-full h-10 w-10">
                    <a href="/logout" id="logout-button"
                        class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition duration-300">Logout</a>
                </div>
            </header>

            <div class="content">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-md shadow-md p-4">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Posts</h2>
                        <div class="text-2xl font-bold text-blue-500">125</div>
                    </div>
                    <div class="bg-white rounded-md shadow-md p-4">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Users</h2>
                        <div class="text-2xl font-bold text-green-500">50</div>
                    </div>
                    <div class="bg-white rounded-md shadow-md p-4">
                        <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Categories</h2>
                        <div class="text-2xl font-bold text-purple-500">15</div>
                    </div>
                </div>

                <div class="bg-white rounded-md shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4">Recent Posts</h2>
                    <ul class="space-y-2">
                        <li class="border-b border-gray-200 py-2">
                            <a href="/post/1" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 1</a>
                            <span class="text-gray-500 text-sm ml-4">Published: 2024-07-28</span>
                        </li>
                        <li class="border-b border-gray-200 py-2">
                            <a href="/post/2" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 2</a>
                            <span class="text-gray-500 text-sm ml-4">Published: 2024-07-27</span>
                        </li>
                        <li class="border-b border-gray-200 py-2">
                            <a href="/post/3" class="text-blue-600 hover:text-blue-800 transition duration-300">Post Title 3</a>
                            <span class="text-gray-500 text-sm ml-4">Published: 2024-07-26</span>
                        </li>
                    </ul>
                    <a href="/posts"
                        class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">View
                        All Posts</a>
                </div>
            </div>


        @endif
    </main>

@endsection