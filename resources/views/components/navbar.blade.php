<nav class="">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                @auth
                    <a href="#" class="text-white text-lg font-semibold">Hello, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</a>
                @endauth
            </div>
            <div class="block">
                <div class="ml-4 flex items-center md:ml-6">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-white">Logout</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
