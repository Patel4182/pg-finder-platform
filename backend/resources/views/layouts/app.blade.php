<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Bootstrap 5 CDN (you can replace with Tailwind or your own styles) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">My App</a>
            <div>
                <a href="{{ route('users.index') }}" class="nav-link d-inline">Users</a>
                <a href="{{ route('listings.index') }}" class="nav-link d-inline">Listings</a>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    {{-- Optional: Bootstrap JS (not needed unless using dropdowns/modals) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
