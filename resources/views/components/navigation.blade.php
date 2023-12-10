<nav class="flex w-full h-24 justify-between items-center space-x-6 p-4">
    <div>
        <a href="/">
        <img src="/logo.png" class="h-12 p-2"/>
    </a>
    </div>
    <div class="w-full flex items-center justify-center">
        <ul class="flex space-x-4">
            <li><a href="#">Home</a></li>
            @foreach($categories as $category)
            <li>
                <a href="#">{{$category->category_name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div>
        <a href="{{route('logout')}}">
        <button class="px-4 py-2 bg-red-600">Logout</button>
    </a>
    </div>
</nav>