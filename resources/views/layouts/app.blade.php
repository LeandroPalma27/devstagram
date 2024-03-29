<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Devstagram - @yield('title')</title>
</head>

<body>
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">DevStagram</h1>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="/login">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/registrar">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <main class="root container mx-auto mt-10">
        <h2 class="font-black text-center text-2xl mb-10">@yield('title')</h2>
        @yield('root')
    </main>
    <footer class="footer text-center font-bold p-5 text-gray-500">DevStagram - Todos los derechos reservados | {{ Date::now() -> year}}</footer>
</body>

</html>
