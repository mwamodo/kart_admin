@props([
    'title',
    'stat',
    'range',
    'percentage',
])

<div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
    <dt>
        <div class="absolute bg-blue-500 rounded-md p-3">
            {{ $slot }}
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">{{ $title }}</p>
    </dt>
    <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">
            {{ $stat }}
        </p>
        <p class="ml-2 flex items-baseline text-sm font-semibold {{ $range == 'high' ? 'text-green-600' : 'text-red-500' }}">
            @if($range == 'high')
                <x-icon.up />
            @else
                <x-icon.down />
            @endif
            {{ $percentage }}%
        </p>
        <div class="absolute bottom-0 inset-x-0 bg-blue-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
                {{ $link }}
            </div>
        </div>
    </dd>
</div>