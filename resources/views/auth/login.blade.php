@extends("auth.template") @section("title", "login") @section("content")
<div
    class="w-80 bg-white py-4 border rounded-lg border-1 border-gray-500 flex flex-col p-4"
>
    <form action="{{ route('login.store') }}" class="space-y-4" method="POST">
        @csrf
        <div class="flex justify-center items-center">
            <span class="text-lg font-bold">Login</span>
        </div>

        @if(session()->has('success'))
        <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <p>{{session()->get('success')}}</p>
          </div>
        @endif
        <div class="flex flex-col space-y-4">
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
            Login
        </button>
        <div class="flex justify-center items-center">
            <a href="{{route('register.index')}}" class="text-center text-blue-600">
                <span>Create new account?</span>
            </a>
        </div>
    </form>
</div>
@endsection
