<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EjemploSeg - @yield('title', 'Acceso')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        <a href="/" class="text-2xl font-bold text-gray-800 mb-6">
            EjemploSeg
        </a>

        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>

</body>
</html>