<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App') — Day 30</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            padding: 0 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
        }
        .nav-brand {
            color: white;
            font-size: 1.4rem;
            font-weight: bold;
            text-decoration: none;
        }
        .nav-links {
            display: flex;
            list-style: none;
            gap: 0.5rem;
        }
        .nav-links a {
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }
        .nav-links a:hover, .nav-links a.active {
            background: rgba(255,255,255,0.2);
            color: white;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            min-height: calc(100vh - 100px);
        }

        /* Footer */
        .footer {
            background: #2d3436;
            color: rgba(255,255,255,0.7);
            text-align: center;
            padding: 1.5rem;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links { gap: 0.2rem; }
            .nav-links a { padding: 0.4rem 0.6rem; font-size: 0.85rem; }
            .main-content { padding: 1rem; }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ route('profile.index') }}" class="nav-brand">⚡ Laravel Day 30</a>
            <ul class="nav-links">
                <li><a href="{{ route('profile.index') }}" class="{{ request()->routeIs('profile.index') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('profile.about') }}" class="{{ request()->routeIs('profile.about') ? 'active' : '' }}">Tentang</a></li>
                <li><a href="{{ route('profile.portfolio') }}" class="{{ request()->routeIs('profile.portfolio') ? 'active' : '' }}">Portofolio</a></li>
                <li><a href="{{ route('sapa') }}">Sapa</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>Dibuat dengan ❤️ pada Day 30 — Introduction to Laravel Framework</p>
    </footer>

    @yield('scripts')
</body>
</html>
