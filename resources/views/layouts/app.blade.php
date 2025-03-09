<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <div class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Manajemen User</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Data Jemaat</a></li>
            </ul>
        </div>

        <div class="flex-grow-1 p-3">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <span class="navbar-brand">Selamat datang, {{ Auth::user()->userid }}</span>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <img src="https://via.placeholder.com/40" class="rounded-circle">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </nav>

            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
