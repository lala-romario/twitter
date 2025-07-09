<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="h-full bg-black">
    
    @vite('resources/js/app.js')
    <div class="flex">
        <div class="flex bg-black h-screen max-w-140 border border-neutral-800">@yield('menu-col')</div>
        <div class="max-w-140 md:grid-cols-3 bg-black border-r-1 border-neutral-800 ">@yield('posts-col')</div>
        <div class="bg-black justify-center bg-black">@yield('search-col')</div>
    </div>
</body>
</html>
