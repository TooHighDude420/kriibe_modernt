<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Kribbe') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0F0F0F] text-[#E5E5E5] h-dvh w-dvw">
    <header class="h-[15%] w-full flex justify-center items-center sticky top-0">
        <x-navbar />
    </header>
    <main class="w-full h-[85%] flex justify-center">
        {{ $slot }}
    </main>
</body>
</html>

