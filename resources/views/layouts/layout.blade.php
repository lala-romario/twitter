<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="h-full">
    
    @vite('resources/js/app.js')
    <div class="grid grid-cols-3">
        <div class="flex bg-black h-screen border border-gray-800">@yield('menu-col')</div>
        <div class="grid grid-cols-1 md:grid-cols-3 bg-black border-r-1 border-gray-800">@yield('posts-col')</div>
        <div class="flex bg-black justify-center">@yield('search-col')</div>
    </div>
</body>
</html>
