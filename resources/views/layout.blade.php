<!DOCTYPE html>
<html>
<head>
    <title>Pet Records</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Pet Records Manager</span>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center mt-5 text-muted">
        <p>© {{ date('Y') }} Pet Records App</p>
    </footer>
</body>
</html>
