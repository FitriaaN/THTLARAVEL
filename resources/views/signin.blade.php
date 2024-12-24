<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a5acd, #836fff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        main {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #6a5acd;
        }

        label {
            margin: 10px 0 5px;
            display: block;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6a5acd;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6a5acd;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #5a4dbf;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #333;
        }

        footer a {
            color: #6a5acd;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <h1>Grand Lucky Hotel</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <footer>
            <p><a href="#">Forgot password?</a></p>
            <br>
            <p>Don't have an account? <p><a href="{{ route('register') }}">Create Account</a></p>

        </footer>
    </main>
</body>
</html>