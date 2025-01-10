<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD Operation using Laravel')</title>

    @yield('styles')

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        h2, h3 {
            font-weight: 600;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
        }

        .well {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            text-align: center;
        }

        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 10px;
            right: 10px;
            color: #28a745;
            font-weight: bold;
            font-size: 14px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .well {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar with Logout -->
    <div class="navbar">
        <h3>Laravel CRUD App</h3>
        <div>
            <a href="{{ route('cars.index') }}">Cars</a>
            <a href="{{ route('logout') }}" 
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
   Logout
</a>

        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


    <div class="container well">
        <h2 class="text-center">Assignment Of Laravel</h2>
    </div>

    <div class="container">
        @yield('mainContent')
    </div>

    <footer>
        <strong>Fahad</strong>
    </footer>

</body>
</html>
