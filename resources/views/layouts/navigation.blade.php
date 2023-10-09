<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        Home
                    </x-nav-link>
                    <x-nav-link :href="route('create')" :active="request()->routeIs('create')">
                        Create
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ml-6">
                <div class="inline-flex 
                            items-center px-3 py-2 
                            border border-transparent 
                            text-sm leading-4 font-medium 
                            rounded-md text-gray-500 
                            bg-white hover:text-gray-700 
                            focus:outline-none 
                            transition ease-in-out 
                            duration-150"
                    >
                    {{ config('app.player_name') }}選手
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                {{ __('Index') }}
            </x-nav-link>
        </div>
    </div>
</nav>
