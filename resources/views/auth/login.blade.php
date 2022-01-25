@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 text-white text-center mb-6 p-4 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-4">              
                    <label for="email" class="sr-only">email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="type your email ..."
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
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
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        value=""
                    >

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me !</label>
                </div>
                    
                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 ronded font-medium w-full">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection