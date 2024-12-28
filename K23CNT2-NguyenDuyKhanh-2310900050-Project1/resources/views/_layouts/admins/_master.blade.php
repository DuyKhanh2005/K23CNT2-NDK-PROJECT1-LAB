<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background: #343a40;
            min-height: 100vh;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        /* Main content wrapper styles */
        .wrapper {
            width: calc(100% - 250px);
            background: #fff;
            min-height: 100vh;
            margin-left: 250px;
        }

        /* Header styles */
        header {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 1.5em;
        }

        /* Content body padding */
        .content-body {
            padding: 20px;
        }
    </style>
</head>
<body style="background: #f4f4f4;">
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar">
            @include('_layouts.admins._menu')
        </nav>

        <!-- Main content wrapper -->
        <div class="wrapper">
            <!-- Header -->
            <header>
                @include('_layouts.admins._headerTitle')
            </header>

            <!-- Content body -->
            <div class="content-body">
                @yield('content-body')
            </div>
        </div>
    </div>

    <!-- Script dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
