@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        placeholder="type your name ..."
                        value=""
                    >
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        placeholder="type your username ..."
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value=""
                    >

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">              
                    <label for="email" class="sr-only">email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="type your email ..."
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value=""
                    >

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="type your password ..."
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value=""
                    >

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">password confrim</label>
                    <input
                        type="text"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="repeat password ..."
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                        value=""
                    >
                </div>

                    
                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 ronded font-medium w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection