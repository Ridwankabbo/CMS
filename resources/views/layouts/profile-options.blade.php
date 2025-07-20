<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWTFoEw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
        }

        .sidebar {
            background-color: #2c3e50;
            min-height: 100vh;
            color: #ecf0f1;
            padding: 1.5rem;
        }

        .sidebar .nav-link {
            color: #ecf0f1;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #34495e;
        }

        .sidebar .nav-link i {
            margin-right: 0.75rem;
            width: 1.25rem;
            text-align: center;
        }

        .main-content {
            padding: 2rem;
            flex-grow: 1;
        }

        .card-custom {
            border-radius: 0.75rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.2s ease-in-out;
        }

        .card-custom:hover {
            transform: translateY(-5px);
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

    <div class="container-fluid">
        <div>
            <nav class="navbar navbar-expand-sm navbar-dark p-2" style="border:2px; border-radius: 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{url('images/asset/logo.jpg')}}" alt="Avatar Logo" style="height:110px; width:110px;"
                            class="rounded-pill">
                    </a>
                </div>
            </nav>
        </div>
        <div>

            <div class="" style="justify-content: space-between">

                <div class="d-flex ">

                    <!-- Sidebar -->
                    <div class="sidebar d-flex flex-column align-items-start sticky-top">
                        <h2 class="text-white fw-bold mb-5 fs-4">CMS Dashboard</h2>
                        <nav class="nav nav-pills flex-column w-100">
                            <a class="nav-link active" href="overview" data-section="overview"><i
                                    class="fas fa-tachometer-alt"></i> Overview</a>
                            <a class="nav-link" href="#" data-section="posts"><i class="fas fa-file-alt"></i> My
                                Posts</a>
                            <a class="nav-link" href="#" data-section="media"><i class="fas fa-images"></i> Media
                                Library</a>
                            <a class="nav-link" href="profile" data-section="profile"><i class="fas fa-user-circle"></i>
                                Profile</a>
                            <a class="nav-link" href="profile-settings" data-section="settings"><i class="fas fa-cogs"></i>
                                Settings</a>
                        </nav>
                        <div class="mt-auto pt-4 w-100 border-top border-secondary pt-3">
                            <button id="logout-button" class="btn btn-danger w-100 rounded-pill"><i
                                    class="fas fa-sign-out-alt me-2"></i> Logout</button>
                        </div>
                    </div>


                    <div class="">
                        @yield('user-options')

                    </div>

                </div>


                {{-- <form action="/save">
                    @yield('user-options')
                </form> --}}


            </div>

        </div>

    </div>

    <script src="{{url('js/profileSelectionSection.js')}}"></script>



</body>

</html>