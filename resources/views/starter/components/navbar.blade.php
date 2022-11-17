<!-- Navbar -->
<nav class="fixed top-0 left-0 z-20 w-full py-[5px] bg-transparent backdrop-blur-md sm:px-4">
    <!-- Nav Container -->
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <!-- Logo Link -->
        <a href="{{ url('/') }}" class="flex items-center">
            <!-- Site Name -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-700 dark:text-gray-200">
                {{ config('app.name', 'Laravel Starter') }}
            </span>
        </a>

        <!-- Hamburger Menu -->
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center justify-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Auth Links -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <!-- Link List -->
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:border-gray-700">
                <!-- Login -->
                <li>
                    <a href="{{ route('login') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        {{ __('fortify-ui::auth.login') }}
                    </a>
                </li>

                <!-- Register -->
                <li>
                    <a href="{{ route('register') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                        {{ __('fortify-ui::auth.register') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
