<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield("title")</title>
        <link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body
        class="w-full h-screen flex flex-col justify-start items-center bg-gray-800 text-white"
    >
    <x-navigation/>
        @yield("content")
        <script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
    </body>
</html>
