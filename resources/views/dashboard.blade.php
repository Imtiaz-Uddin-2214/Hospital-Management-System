<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            z-index: 100;
        }

        .sidebar a {
            color: #ddd;
            padding: 12px 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            margin-top: 60px;
        }

        .navbar-custom {
            background-color: #007bff;
            z-index: 200;
        }

        .navbar-custom .navbar-brand, .navbar-custom .navbar-text {
            color: white;
        }
    </style>
</head>
<body class="bg-light">

    @include('layouts.sidebar')
    @include('layouts.navbar')

    <div class="content">
        <h2 class="text-center">Welcome to the Hospital Management System</h2>
        <div class="text-center">
            <img src="path/to/your/image.jpg" alt="Hospital Management System" class="img-fluid mt-4">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
