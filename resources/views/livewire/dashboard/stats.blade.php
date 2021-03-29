<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">

    </h3>

    <div class="text-lg leading-6 font-medium text-gray-900 w-full lg:w-1/4">
        <label for="duration" class="block text-sm font-medium text-gray-700 sr-only">Duration</label>
        <select wire:model="duration" id="duration" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="0">Today</option>
            <option value="7">Last 7 Days</option>
            <option value="30">Last 30 days</option>
            <option value="90">Last 90 days</option>
        </select>
    </div>

    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <x-dashboard.stat-card title="Total Orders" :stat="$orders" :range="$order_range" :percentage="$order_percentage">
            <x-icon.orders class="h-6 w-6 text-white" />
            <x-slot name="link">
                <a href="" class="font-medium text-gray-600 hover:text-gray-500">View all</a>
            </x-slot>
        </x-dashboard.stat-card>

        <x-dashboard.stat-card title="Total Customers" :stat="$buyers" :range="$buyer_range" :percentage="$buyer_percentage" :stat_route="route('buyers')">
            <x-icon.buyers class="h-6 w-6 text-white" />
            <x-slot name="link">
                <a href="{{ route('buyers') }}" class="font-medium text-gray-600 hover:text-gray-500">View all</a>
            </x-slot>
        </x-dashboard.stat-card>

        <x-dashboard.stat-card title="Total Sellers" :stat="$sellers" :range="$seller_range" :percentage="$seller_percentage">
            <x-icon.buyers class="h-6 w-6 text-white" />
            <x-slot name="link">
                <a href="" class="font-medium text-gray-600 hover:text-gray-500">View all</a>
            </x-slot>
        </x-dashboard.stat-card>
    </dl>
</div>