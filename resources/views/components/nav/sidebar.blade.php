<div class="hidden w-28 bg-gray-700 overflow-y-auto md:block">
    <div class="w-full py-6 flex flex-col items-center">
        <div class="flex-shrink-0 flex items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white"
                 alt="Kart">
        </div>
        <div class="flex-1 mt-6 w-full px-2 space-y-1">
            <a href="{{ route('dashboard') }}"
               class="w-full p-3 rounded-md flex flex-col items-center text-xs font-medium {{ Request::is('admin/dashboard') ? 'bg-gray-800 text-white' : 'group text-gray-100 hover:bg-gray-800 hover:text-white' }}"
               aria-current="page">
                <x-icon.home class="h-6 w-6 {{ Request::is('admin/dashboard') ? 'text-white' : 'text-gray-300 group-hover:text-white' }}" />
                <span class="mt-2">Home</span>
            </a>

            <a href="#"
               class="group text-gray-100 hover:bg-gray-800 hover:text-white w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
               aria-current="page">
                <x-icon.sellers class="text-gray-300 group-hover:text-white h-6 w-6" />
                <span class="mt-2">Sellers</span>
            </a>

            <a href="#"
               class="group text-gray-100 hover:bg-gray-800 hover:text-white w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
               aria-current="page">
                <x-icon.product class="text-gray-300 group-hover:text-white h-6 w-6"/>
                <span class="mt-2">Products</span>
            </a>

            <a href="{{ route('buyers') }}"
               class="w-full p-3 rounded-md flex flex-col items-center text-xs font-medium {{ Request::is('admin/buyers') ? 'bg-gray-800 text-white' : 'group text-gray-100 hover:bg-gray-800 hover:text-white' }}"
               aria-current="page">
                <x-icon.buyers class="text-gray-300 group-hover:text-white h-6 w-6 {{ Request::is('admin/buyers') ? 'text-white' : 'text-gray-300 group-hover:text-white' }}" />
                <span class="mt-2">Buyers</span>
            </a>

            <a href="#"
               class="group text-gray-100 hover:bg-gray-800 hover:text-white w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
               aria-current="page">
                <x-icon.orders class="text-gray-300 group-hover:text-white h-6 w-6" />
                <span class="mt-2">Orders</span>
            </a>

            <a href="#"
               class="group text-gray-100 hover:bg-gray-800 hover:text-white w-full p-3 rounded-md flex flex-col items-center text-xs font-medium"
               aria-current="page">
                <x-icon.settings class="text-gray-300 group-hover:text-white h-6 w-6" />
                <span class="mt-2">Settings</span>
            </a>

        </div>
    </div>
</div>