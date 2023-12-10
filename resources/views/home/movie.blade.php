@extends('home/template') @section('title', 'home') @section('content')
<div class="w-full text-white flex flex-col p-4">
    <div class="w-full lg:w-4/5 space-y-8">
        <video
            id="my-video"
            class="video-js w-full"
            controls
            preload="auto"
            width="640"
            height="480"
            poster="{{$movie->thumbnail}}"
            data-setup="{}"
        >
            <source src="{{$movie->url}}" type="video/mp4" />
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider
                upgrading to a web browser that
                <a
                    href="https://videojs.com/html5-video-support/"
                    target="_blank"
                    >supports HTML5 video</a
                >
            </p>
        </video>
        <div class="flex justify-between space-x-6">
            <div class="flex space-x-4">
                <img src="{{$movie->thumbnail}}" class="h-28"/>
            <div class="flex flex-col space-y-3 justify-start py-2">
            <span class="text-2xl">{{$movie->title}}</span>
            <span class="text-lg">{{$movie->release_year}}</span>
            </div>
            </div>
            <div class="p-4 flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                  </svg>
                  
                <span>
                    5 rating
                </span>
            </div>
        </div>
        <div>
            <span class="text-lg">{{$movie->description}}</span>
        </div>
        <div class="flex flex-col space-y-3">
            <span class="text-lg font-bold">Recomendation</span>
            <div
                class="w-full flex space-x-6 overflow-x-scroll scroll-smooth no-scrollbar"
            >
                @foreach($recomendations as $recomendation)
                <div>
                <a
                    href="/{{$recomendation->id}}"
                    class="flex flex-col hover:scale-105 w-40 py-4 px-2 hover:ease-in-out space-y-4"
                >
                    <img
                        src="{{$recomendation->thumbnail}}"
                        class="w-36 h-52 inline-block"
                    />
                    <div class="flex flex-col space-y-2">
                        <span class="text-sm">{{$recomendation->title}}</span>
                        <span
                            class="text-xs text-gray-400"
                            >{{$recomendation->release_year}}</span
                        >
                    </div>
                </a>
            </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection