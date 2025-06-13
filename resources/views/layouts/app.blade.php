<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Beranda' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-800">Nama Sekolah</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-blue-600">Beranda</a>
                <a href="/pengumuman" class="text-gray-700 hover:text-blue-600">Pengumuman</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center py-4">
        <p>&copy; {{ date('Y') }} Nama Sekolah. All rights reserved.</p>
    </footer>

</body>
</html>
