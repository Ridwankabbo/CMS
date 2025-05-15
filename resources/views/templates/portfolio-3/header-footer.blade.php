<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            line-height: 1.7;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }
        header h1 {
            margin: 0 0 0.5rem 0;
            font-size: 2.5rem;
            font-weight: 600;
        }
        header p {
            margin: 0;
            font-size: 1.1rem;
        }
        .section {
            padding: 4rem 0;
            text-align: center;
        }
        .section h2 {
            margin-bottom: 2rem;
            font-size: 2rem;
            font-weight: 600;
        }
        .section .about-me{
            text-align: center
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 0 auto;
            max-width: 1000px;
        }
        .project-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 1.5rem;
            text-align: left;
            transition: transform 0.3s ease;
        }
        .project-card:hover {
            transform: translateY(-5px);
        }
        .project-card h3 {
            margin: 0 0 1rem 0;
            font-size: 1.4rem;
            font-weight: 600;
        }
        .project-card p {
            margin: 0 0 1rem 0;
            font-size: 1rem;
        }
        .project-card a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        .project-card a:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem 0;
            font-size: 0.9rem;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 4px solid #4CAF50;
        }
        .about-me{
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
    </style>
</head>
<body>
    @yield('main-content')
    <footer>
        <p>&copy; 2025 John Doe. All rights reserved.</p>
    </footer>
</body>
</html>
