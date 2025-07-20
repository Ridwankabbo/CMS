<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your CMS Project</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
        }
        .btn-custom-primary {
            background-color: #3498db; /* Primary blue */
            border-color: #3498db;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-custom-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
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
            max-width: 500px;
        }
        #message-box.show {
            display: block;
        }
    </style>
</head>
<body>
   

    <div class="login-container mx-auto">
        <h1 class="text-center mb-5 fw-bold text-dark">Login to Your CMS</h1>
        <form id="singin" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-muted">Email address</label>
                <input type="email" class="form-control rounded-md p-3" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label text-muted">Password</label>
                <input type="password" class="form-control rounded-md p-3" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-custom-primary w-100">Login</button>
        </form>
        <p class="text-center text-muted mt-4">
            Don't have an account? <a href="cms_signup_page.html" class="text-decoration-none text-primary">Sign up here</a>
        </p>
        <p class="text-center text-muted mt-2">
            <a href="#" class="text-decoration-none text-primary">Forgot Password?</a>
        </p>
    </div>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
