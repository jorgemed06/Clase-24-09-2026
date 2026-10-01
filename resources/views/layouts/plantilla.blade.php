<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EjemploSeg - @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body> class ="bg-gray-100 front-sans antialiased">
    @include('layouts.navigation')

    <div class="flex min-h-screen">
        @include('layouts.sidebar')
        
        <main class="flex-1 p-8">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>