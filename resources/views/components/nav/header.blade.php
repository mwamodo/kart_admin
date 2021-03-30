<header class="w-full">
    <div class="relative z-10 flex-shrink-0 h-16 bg-white border-b border-blue-200 shadow-sm flex">
        <button @click.stop="sidebarOpen = true"
                class="border-r border-blue-200 px-4 text-blue-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 md:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
        </button>
        <div class="flex-1 flex justify-between px-4 sm:px-6">
            <div class="flex-1 flex">
                <form class="w-full flex md:ml-0" action="#" method="GET">
                    <label for="search_field" class="sr-only">Search all files</label>
                    <div class="relative w-full text-blue-400 focus-within:text-blue-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="search_field" id="search_field"
                               class="h-full w-full border-transparent py-2 pl-8 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400"
                               placeholder="Search" type="search">
                    </div>
                </form>
            </div>
            <div class="ml-2 flex items-center space-x-4 sm:ml-6 sm:space-x-6">
                <!-- Profile dropdown -->
                <div x-data="{ open: false }" @keydown.escape.stop="open = false"
                     @click.away="open = false" class="relative flex-shrink-0">
                    <div>
                        <button type="button"
                                class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                id="user-menu" @click="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                                 alt="">
                        </button>
                    </div>

                    <div x-description="Dropdown menu, show/hide based on menu state." x-show="open"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                         role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                           role="menuitem">Your profile</a>

                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                           role="menuitem">Sign out</a>

                    </div>

                </div>

                <button type="button"
                        class="flex bg-blue-600 p-1 rounded-full items-center justify-center text-white hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="sr-only">Add file</span>
                </button>
            </div>
        </div>
    </div>
</header>