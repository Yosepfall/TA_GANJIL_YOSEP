<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        
        /* Styles for the login form */
        #loginForm {
            display: none; /* Form login tersembunyi saat pertama kali */
            background-color: #f9f9f9;
            padding: 20px;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -20%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        #loginForm input {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
        }
        #loginForm button {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- Button to toggle login form -->
    <button id="toggleLogin">Toggle Login Form</button>

    <!-- Login Form -->
    <div id="loginForm">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        
    </div>

    <script>
        // JavaScript to toggle login form
        document.getElementById('toggleLogin').addEventListener('click', function () {
            var loginForm = document.getElementById('loginForm');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
            } else {
                loginForm.style.display = 'none';
            }
        });
    </script>
</body>
</html>
