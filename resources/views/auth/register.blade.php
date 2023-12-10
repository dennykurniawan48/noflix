@extends("auth.template") @section("title", "login") @section("content")
<div
    class="w-80 bg-white py-4 border rounded-lg border-1 border-gray-500 flex flex-col p-4"
>
    <form action="{{ route('register.store') }}" class="space-y-4" method="POST">
        @csrf
        <div class="flex justify-center items-center">
            <span class="text-lg font-bold">Register</span>
        </div>
        <div class="flex flex-col space-y-4">
            <div class="flex border border-1 border-gray-400 rounded-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>                  

                <input
                    type="text"
                    value="{{request()->old('name', '')}}"
                    name="name"
                    class="w-full outline-none ml-2"
                    placeholder="Name"
                />
            </div>
            <div class="flex border border-1 border-gray-400 rounded-md p-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    />
                </svg>

                <input
                    type="text"
                    value="{{request()->old('email', '')}}"
                    name="email"
                    class="w-full outline-none ml-2"
                    placeholder="Email"
                />
            </div>
            <div class="flex border border-1 border-gray-400 rounded-md p-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                    />
                </svg>

                <input
                    type="password"
                    class="w-full outline-none ml-2"
                    name="password"
                    placeholder="Password"
                />
            </div>
        </div>
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{$errors->first()}}</strong>
          </div>
        @endif
        <button class="w-full p-3 text-md bg-red-500 text-white font-bold">
            Register
        </button>
        <div class="flex justify-center items-center">
            <a href="{{route('login.index')}}" class="text-center text-blue-600">
                <span>Already have an account?</span>
            </a>
        </div>
    </form>
</div>
@endsection
