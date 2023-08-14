<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen p-10 md:p-0">
        <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 w-full">
                <form method="POST" action="{{ route('register') }}" class="w-full max-w-sm mx-auto py-6 px-4">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" name="email" id="email" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" id="password" required autocomplete="current-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('login') }}">Already have an account?</a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
