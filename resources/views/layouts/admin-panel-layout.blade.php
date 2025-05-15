<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="bg-gray-800 text-white w-64 p-4 rounded-md shadow-lg">
            <div class="logo text-xl font-semibold mb-8">CMS Admin</div>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="/dashboard" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h8a1 1 0 001-1v-4m-4-3v4m2-5h4m-7 0h4" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/posts" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-4m0 0H7m2 4h4m-7-4v-3m0 0l3-3m-3 3l-3-3" />
                            </svg>
                            Posts
                        </a>
                    </li>
                    <li>
                        <a href="/categories" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Categories
                        </a>
                    </li>
                    <li>
                        <a href="/users" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="/settings" class="block px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        @yield('dashboard-section-body')
    </div>

    <script>
        // const mobileMenuButton = document.getElementById('mobile-menu-button');
        // const mobileMenu = document.getElementById('mobile-menu');
        // const logoutButton = document.getElementById('logout-button');

        // if (mobileMenuButton && mobileMenu) {
        //     mobileMenuButton.addEventListener('click', () => {
        //         mobileMenu.classList.toggle('hidden');
        //     });
        // }

        // document.addEventListener('click', (event) => {
        //     if (mobileMenu && !mobileMenu.classList.contains('hidden') && !mobileMenu.contains(event.target) && event.target !== mobileMenuButton) {
        //         mobileMenu.classList.add('hidden');
        //     }
        // });

        // if (logoutButton) {
        //     logoutButton.addEventListener('click', () => {
        //         alert('Logging out...');
        //         window.location.href = '/login';
        //     });
        // }
    </script>
</body>
</html>
