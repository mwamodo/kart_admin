<div x-show="sidebarOpen" class="md:hidden"
     x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state."
     style="display: none;">
    <div class="fixed inset-0 z-40 flex">
        <div @click="sidebarOpen = false" x-show="sidebarOpen"
             x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state."
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0"
             aria-hidden="true" style="display: none;">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <div x-show="sidebarOpen" x-description="Off-canvas menu, show/hide based on off-canvas menu state."
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
             class="relative max-w-xs w-full bg-indigo-700 pt-5 pb-4 flex-1 flex flex-col"
             style="display: none;">
            <div class="absolute top-1 right-0 -mr-14 p-1">
                <button x-show="sidebarOpen" @click="sidebarOpen = false"
                        class="h-12 w-12 rounded-full flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-white"
                        style="display: none;">
                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="sr-only">Close sidebar</span>
                </button>
            </div>
            <div class="flex-shrink-0 px-4 flex items-center">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                     alt="Workflow">
            </div>
            <div class="mt-5 flex-1 h-0 px-2 overflow-y-auto">
                <nav class="h-full flex flex-col">
                    <div class="space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "group text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
                        <a href="#"
                           class="group text-indigo-100 hover:bg-indigo-800 hover:text-white py-2 px-3 rounded-md flex items-center text-sm font-medium">
                            <svg class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6"
                                 x-description="Heroicon name: outline/home"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>Home</span>
                        </a>


                        <a href="#"
                           class="group text-indigo-100 hover:bg-indigo-800 hover:text-white py-2 px-3 rounded-md flex items-center text-sm font-medium">
                            <x-icon.sellers class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" />
                            <span>Sellers</span>
                        </a>


                        <a href="#"
                           class="bg-indigo-800 text-white py-2 px-3 rounded-md flex items-center text-sm font-medium"
                           aria-current="page">
                            <!-- Current: "text-white", Default: "text-indigo-300 group-hover:text-white" -->
                            <x-icon.product class="mr-3 h-6 w-6"/>
                            <span>Products</span>
                        </a>


                        <a href="#"
                           class="group text-indigo-100 hover:bg-indigo-800 hover:text-white py-2 px-3 rounded-md flex items-center text-sm font-medium">
                            <x-icon.buyers class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" />
                            <span>Buyers</span>
                        </a>


                        <a href="#"
                           class="group text-indigo-100 hover:bg-indigo-800 hover:text-white py-2 px-3 rounded-md flex items-center text-sm font-medium">
                            <x-icon.orders class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" />
                            <span>Orders</span>
                        </a>


                        <a href="#"
                           class="group text-indigo-100 hover:bg-indigo-800 hover:text-white py-2 px-3 rounded-md flex items-center text-sm font-medium">
                            <x-icon.settings class="text-indigo-300 group-hover:text-white mr-3 h-6 w-6" />
                            <span>Settings</span>
                        </a>

                    </div>
                </nav>
            </div>
        </div>
        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>