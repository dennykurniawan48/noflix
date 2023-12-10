<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full h-screen bg-cover flex flex-col justify-center items-center"
    style="background-image: url('/bg.jpg');"
>
    @yield("content")
</body>
</html>