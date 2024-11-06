<nav x-data="{ open: false }" >
    <div class="max-w-7xl">
        <div class="flex justify-between">
            <div class="flex" ></div>

            <div class="hidden sm:flex sm:items-center">
                <!-- Profile Dropdown -->
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <!-- Display only the profile photo -->
                            <button class="flex text-sm" @onclick="open = !open">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Display user's name and account management options -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ Auth::user()->name }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}" style="text-align: right">
                                {{ __('حسابي') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();" style="text-align: right">
                                    {{ __('تسجيل الخروج') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger menu for mobile -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
