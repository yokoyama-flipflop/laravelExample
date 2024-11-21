<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Site')</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="layout">
        <!-- Barra Lateral -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Menu</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">Sobre</a>
                <a href="{{ route('contact') }}">Contato</a>
            </nav>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>
</html>
