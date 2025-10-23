<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackrPlay - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen transition-colors duration-500 bg-white text-black" id="body">
    @include('components.navbar')

    <main class="flex-grow container mx-auto p-6" id="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    {{-- script dark mode --}}
    <script>
        const html = document.documentElement;
        const body = document.getElementById('body');
        const navbar = document.getElementById('navbar');
        const dashboard = document.getElementById('dashboard');
        const pengelolaan = document.getElementById('pengelolaan-content');
        const themeToggle = document.getElementById('themeToggle');
        const saved = localStorage.getItem('theme');

        if (saved === 'dark') setTheme(true);

        function setTheme(dark) {
            if (dark) {
                body.classList.replace('bg-white', 'bg-gray-900');
                body.classList.replace('text-black', 'text-white');
                navbar.classList.replace('bg-gray-800', 'bg-gray-800');
                themeToggle.textContent = '☀️';
                document.querySelectorAll('.content-box').forEach(el => {
                    el.classList.replace('bg-gray-800', 'bg-white');
                    el.classList.replace('text-white', 'text-black');
                });
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.replace('bg-gray-900', 'bg-white');
                body.classList.replace('text-white', 'text-black');
                navbar.classList.replace('bg-gray-800', 'bg-gray-800');
                themeToggle.textContent = '🌙';
                document.querySelectorAll('.content-box').forEach(el => {
                    el.classList.replace('bg-white', 'bg-gray-800');
                    el.classList.replace('text-black', 'text-white');
                });
                localStorage.setItem('theme', 'light');
            }
        }

        themeToggle.addEventListener('click', () => {
            const isDark = localStorage.getItem('theme') === 'dark';
            setTheme(!isDark);
        });
    </script>
</body>
</html>
