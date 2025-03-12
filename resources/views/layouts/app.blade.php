<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        html, body {
            background-color: #fce4ec;
            font-family: 'Poppins', sans-serif;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
        .card {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            height: 70vh;
            object-fit: cover;
        }
        .card-body {
            min-height: 150px;
        }
        .jumbotron {
            padding: 3rem 2rem;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }
        body {
            background-color: #fce4ec;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }
        .navbar {
            background-color: #ff80ab !important;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fffafc;
        }
        .btn-pink {
            background-color: pink;
            color: white;
            border: 1px solid pink;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-pink:hover {
            background-color: #ff69b4; /* Warna pink lebih gelap saat hover */
        } 
        .btn-primary {
            background-color:#ff80ab;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">TegarApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route ('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route ('profile')}}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route ('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route ('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>
    
    <footer class="bg-light text-center py-3 mt-5">
        <p class="mb-0">&copy; 2025 TegarApp. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>