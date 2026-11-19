<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendoorz 2026</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="navbar-isi">
            <a href="{{ route('vendors.index') }}" class="logo">Vendoorz</a>
            <nav>
                <a href="{{ route('vendors.index') }}">Daftar vendor</a>
                <a href="{{ route('vendors.create') }}">Tambah vendor</a>
            </nav>
        </div>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">&copy; Amirudin Fazli Andrian</footer>
</body>
</html>