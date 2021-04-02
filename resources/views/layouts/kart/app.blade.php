@extends('layouts.kart.base')

@section('content')

    <div>
        <div class="h-screen bg-gray-50 flex overflow-hidden" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
            <!-- Narrow sidebar -->
            <x-nav.sidebar />

            <!-- Mobile menu -->
            <x-nav.mobile />

            <!-- Content area -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <x-nav.header />

                <!-- Main content -->
                <div class="flex-1 flex items-stretch overflow-hidden">
                    <main class="flex-1 overflow-y-auto">
                        <!-- Primary column -->
                        <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            @yield('main')
                        </div>
                    </main>

                    <!-- Secondary column (hidden on smaller screens) -->
                    @hasSection('aside')
                        <aside class="hidden w-96 bg-white border-l border-gray-200 overflow-y-auto lg:block">
                            <div class="h-full">
                                <div class="p-6 h-full">
                                    <div class="block border-2 border-dashed border-gray-300 rounded h-full w-full text-gray-200">
                                        @yield('aside')
                                    </div>
                                </div>
                            </div>
                        </aside>
                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection