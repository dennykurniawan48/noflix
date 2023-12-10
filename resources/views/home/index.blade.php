@extends('home/template') @section('title', 'home') @section('content')
<div class="w-full text-white flex flex-col">
    <div
        class="w-full h-screen flex items-center justify-start"
        style="background-image: url('/header.jpg')"
    >
        <div class="w-full flex flex-col p-12 space-y-8">
            <span class="text-5xl font-bold">No-flix</span>
            <span class="w-[600px]"
                >Elevating the cinematic experience to unprecedented heights, we
                takes center stage as the vanguard in the movie streaming
                industry. Guided by a commitment to redefine how audiences
                engage with film, we lead the charge in innovation, user-centric
                design, and an expansive repertoire of cinematic
                offerings.</span
            >
        </div>
    </div>
    <div class="w-full p-8">
        <div class="w-full flex-col space-y-4">
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

        @foreach($movies as $movie)
        <div class="w-full flex-col space-y-4">
            <span class="text-lg font-bold">{{$movie->category_name}}</span>
            <div
                class="w-full flex space-x-6 overflow-x-scroll scroll-smooth no-scrollbar"
            >
                @foreach($movie->movies as $movie)
                <div>
                <a
                    href="#"
                    class="flex flex-col hover:scale-105 w-40 py-4 px-2 hover:ease-in-out space-y-4"
                >
                    <img
                        src="{{$movie->thumbnail}}"
                        class="w-36 h-52 inline-block"
                    />
                    <div class="flex flex-col space-y-2">
                        <span class="text-sm">{{$movie->title}}</span>
                        <span
                            class="text-xs text-gray-400"
                            >{{$movie->release_year}}</span
                        >
                    </div>
                </a>
            </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
