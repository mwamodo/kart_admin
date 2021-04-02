<div class="">
    <div class="md:flex md:items-center md:justify-between mt-4">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate">
                Buyers
            </h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button>
                Create Buyer
            </x-button>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Orders
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Reviews
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Address
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($buyers as $buyer)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a class="flex items-center" href="#">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                @if($buyer->image!="")
                                                    <img src="{{url($buyer->image)}}" class="h-10 w-10 rounded-full">
                                                @else
                                                    <img src="{{url('/images/default.png')}}" class="h-10 w-10 rounded-full">
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $buyer->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $buyer->email }}
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $buyer->orders->count() }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $buyer->ratingReview->count() }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @foreach($buyer->addresses as $address)
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{$address->address_1}}
                                            </span>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="mt-8">
                        {{ $buyers->onEachSide(0)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>