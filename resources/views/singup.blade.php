<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Your CMS Project</title>
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
        .signup-container {
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 450px;
        }
        .btn-custom-primary {
            background-color: #2ecc71; /* Emerald Green */
            border-color: #2ecc71;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-custom-primary:hover {
            background-color: #27ae60;
            border-color: #27ae60;
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

    <div class="signup-container mx-auto">
        <h1 class="text-center mb-5 fw-bold text-dark">Sign Up for Your CMS</h1>
        <form id="signup-form">
            <div class="mb-3">
                <label for="username" class="form-label text-muted">Username</label>
                <input type="text" class="form-control rounded-md p-3" id="username" name="name" placeholder="Choose a username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-muted">Email address</label>
                <input type="email" class="form-control rounded-md p-3" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-muted">Password</label>
                <input type="password" class="form-control rounded-md p-3" id="password" name="password" placeholder="Create a password" required>
            </div>
            {{-- <div class="mb-4">
                <label for="confirm_password" class="form-label text-muted">Confirm Password</label>
                <input type="password" class="form-control rounded-md p-3" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div> --}}
            <div class="mb-3">
                <label for="phone" class="form-label text-muted">Phone</label>
                <input type="number" class="form-control rounded-md p-3" id="phone" name="phone" placeholder="Create a password" required>
            </div>
            <button type="submit" class="btn btn-custom-primary w-100">Sign Up</button>
        </form>
        <p class="text-center text-muted mt-4">
            Already have an account? <a href="/singin" class="text-decoration-none text-primary">Log in here</a>
        </p>
    </div>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <script>
        // Function to display a message using Bootstrap alerts
        function showMessage(message, type = 'success') {
            const messageBox = document.getElementById('message-box');
            const messageText = document.getElementById('message-text');

            messageText.textContent = message;
            messageBox.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
            messageBox.classList.add('show');

            // Automatically hide after 3 seconds
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(messageBox);
                bsAlert.close();
            }, 3000);
        }

        // Basic email validation function
        function isValidEmail(email) {
            const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            return emailRegex.test(email);
        }

        const signupForm = document.getElementById('signup-form');
        signupForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent default form submission

            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            // --- Client-side validation ---
            if (!username) {
                showMessage('Please enter a username.', 'danger');
                return;
            }
            if (!email) {
                showMessage('Please enter your email address.', 'danger');
                return;
            }
            if (!isValidEmail(email)) {
                showMessage('Please enter a valid email address.', 'danger');
                return;
            }
            if (!password) {
                showMessage('Please enter a password.', 'danger');
                return;
            }
            if (password.length < 6) { // Example: minimum password length
                showMessage('Password must be at least 6 characters long.', 'danger');
                return;
            }
            if (password !== confirmPassword) {
                showMessage('Passwords do not match. Please try again.', 'danger');
                return;
            }

            // --- Simulate Server-Side Signup ---
            // Replace this with actual backend integration (e.g., fetch to your PHP/Node.js backend)
            showMessage('Sign up successful! Redirecting to login...', 'success');
            sessionStorage.setItem('message', 'Registration successful! Please log in.');
            sessionStorage.setItem('messageType', 'success');
            setTimeout(() => {
                window.location.href = 'cms_login_page.html'; // Redirect to login page
            }, 500);
        });

        document.addEventListener('DOMContentLoaded', () => {
            // Check for saved messages on page load (e.g., from a previous redirect)
            const savedMessage = sessionStorage.getItem('message');
            const savedMessageType = sessionStorage.getItem('messageType');
            if (savedMessage) {
                showMessage(savedMessage, savedMessageType);
                sessionStorage.removeItem('message'); // Clear message after displaying
                sessionStorage.removeItem('messageType');
            }
        });
    </script> --}}
</body>
</html>
