<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #eef1f6;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            background: white;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 20px 0;
            font-size: 1.8rem;
        }
        .profile-img {
            border-radius: 50%;
            border: 5px solid #007bff;
            width: 130px;
            height: 130px;
            object-fit: cover;
        }
        .card-body h4 {
            font-weight: 600;
            margin-top: 10px;
        }
        .card-body p {
            font-size: 1rem;
            color: #333;
        }
        .skills-list {
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .skills-list li {
            list-style: none;
            padding: 10px 15px;
            margin: 5px;
            border-radius: 8px;
            background: #007bff;
            color: white;
            font-weight: 500;
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
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Contact</a></li>
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