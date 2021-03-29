<div class="hidden lg:block bg-white rounded-lg shadow-lg mt-8 p-2">
    <h2 class="text-base px-3 py-2 border-b text-gray-800 uppercase">Order Status</h2>
    <div class="w-full flex flex-wrap lg:flex-row items-center border-b">
        <div class="py-2 w-1/2 lg:w-1/4  px-2 leading-relaxed border-r">
            <div class=" py-3">
                <p class="text-base">Total Orders</p>
                <p class="text-2xl">{{ $orders }}</p>
            </div>
        </div>
        <div class="py-2 w-1/2 lg:w-1/4  px-2 leading-relaxed">
            <a href="{{url('/admin/order/completed')}}" class="flex items-center">
                <p class="text-2xl lg:text-base text-gray-700">Completed</p>
            </a>
            <p class="text-lg">{{ $completed }}</p>
        </div>
        <div class="py-2 w-1/2 lg:w-1/4  border-r border-l px-2 leading-relaxed">
            <a href="{{url('/admin/order/processing')}}" class="flex items-center">
                <p class="text-2xl lg:text-base text-gray-700">Processing</p>
            </a>
            <p class="text-lg">{{ $processing }}</p>
        </div>
        <div class="py-2 w-1/2 lg:w-1/4  px-2 leading-relaxed">
            <a href="{{url('/admin/order/shipped')}}" class="flex items-center">
                <p class="text-2xl lg:text-base text-gray-700">Shipped</p>
            </a>
            <p class="text-lg">{{ $shipped }}</p>
        </div>
    </div>
    <div class="py-3  leading-relaxed px-3">
        <p class="custom_txt text-base">Total Payments</p>
        <p class="text-orange text-2xl">{{ $total_payment }}</p>
    </div>
</div>