<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourifique</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-10 font-[Inter] overflow-x-hidden relative"
    style="background: linear-gradient(135deg, #43186a 0%, #6b2fa0 40%, #9b59d0 70%, #c084fc 100%); font-family: 'Inter', sans-serif;">

    @yield('body')
</body>

</html>
