<div class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-900 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

    <!-- Sidebar Header -->
    <div class="flex items-center justify-between h-16 px-6 bg-gray-800">
        <h1 class="text-xl font-bold text-white">Dashboard</h1>
        <button @click="sidebarOpen = false" class="lg:hidden text-gray-400 hover:text-white">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="mt-8">
        <div class="px-4 space-y-2">
            <!-- Dashboard -->
            <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-colors">
                <i class="fas fa-tachometer-alt mr-3"></i>
                <span>Dashboard</span>
            </a>


            <!-- Country List -->
            <a href="{{ route('destinations.index') }}" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-colors">
                <i class="fas fa-globe mr-3"></i>
                <span>Country List</span>
            </a>

            <!-- Users -->
            <a href="{{ route('pakagedestinations.index') }}" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-colors">
                <i class="fas fa-users mr-3"></i>
                <span>Package Destinations</span>
            </a>

            <!-- Products -->
            <a href="{{ route('package-details.index') }}" class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white transition-colors">
                <i class="fas fa-box mr-3"></i>
                <span>Products</span>
            </a>

            <!-- Orders -->
            
        </div>
    </nav>

    <!-- Sidebar Footer -->
    <div class="absolute bottom-0 w-full p-4">
        <div class="flex items-center p-3 bg-gray-800 rounded-lg">
            <img class="w-8 h-8 rounded-full" src="https://via.placeholder.com/32" alt="User">
            <div class="ml-3">
                <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                <p class="text-xs text-gray-400">Admin</p>
            </div>
        </div>
    </div>
</div>
<div x-show="sidebarOpen"
    @click="sidebarOpen = false"
    class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"
    x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">
</div>