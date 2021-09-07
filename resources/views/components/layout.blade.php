<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ASMR Finder</title>
</head>
<body class="bg-gray-700 min-h-screen grid grid-rows-3 text-white">
    <nav class="bg-gray-900 flex justify-end px-3 mb-2">
        <ul class="flex h-full">
            <a class="hover:text-black hover:bg-white mx-1 p-3" href="/search"><li>Search</li></a>
            <a class="hover:text-black hover:bg-white mx-1 p-3" href="/register"><li>Register / Login</li></a>
        </ul>
    </nav>
    <main class="flex flex-col align-center text-center">
        {{ $slot }}
    </main>
    <footer class="bg-gray-900 text-center py-3">
        footer
    </footer>
</body>
</html>