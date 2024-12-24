<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* styles.css */

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }

        .sidebar {
            background-color: #fff;
            width: 250px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 1.5rem;
            color: #ff4b6d;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .profile-content {
            flex-grow: 1;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .profile-header h1 {
            font-size: 2rem;
            color: #333;
        }

        .progress {
            font-size: 0.9rem;
            color: #aaa;
        }

        label {
            display: block;
            margin-top: 20px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="url"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus {
            border-color: #ff4b6d;
            outline: none;
        }

        .bio {
            margin-top: 20px;
        }

        .bio textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .bio textarea:focus {
            border-color: #ff4b6d;
            outline: none;
        }

        button {
            background-color: #ff4b6d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
        }

        button:hover {
            background-color: #ff2b4d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Work Opportunities</a></li>
                <li><a href="#">Password</a></li>
                <li><a href="#">Social Profiles</a></li>
                <li><a href="#">Applications</a></li>
            </ul>
        </div>

        <div class="profile-content">
            <div class="profile-header">
                <h1>Your Profile</h1>
                <span class="progress">75%</span>
            </div>
            <h2>Welcome, {{ Auth::user()->name }}</h2>
            <p>Email: {{ Auth::user()->email }}</p>
            <label for="name">Name</label>
            <input type="text" id="name" value="{{ Auth::user()->name }}">

            <label for="username">Username</label>
            <input type="text" id="username" value="{{ Auth::user()->username }}">

            <label for="email">Email</label>
            <input type="email" id="email" value="{{ Auth::user()->email }}">

            <label for="location">Location</label>
            <input type="text" id="location" value="{{ Auth::user()->location }}">

            <div class="bio">
                <label for="bio">Bio</label>
                <textarea id="bio" maxlength="200" placeholder="Maximum 200 characters"></textarea>
            </div>

            <button type="submit">Save</button>
        </div>
    </div>

    <footer>
        <p>Want to update your profile? <a href="#">Edit Profile</a></p>
        <a href="{{ route('logout') }}">Logout</a>
    </footer>
</body>
</html>