<aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
    class="fixed lg:static inset-y-0 left-0 w-64 bg-white border-r shadow-sm transform transition-transform duration-300 z-50 flex flex-col justify-between">

    <!-- Header -->
    <div class="flex items-center gap-2 px-5 py-4 border-b">
        <div class="h-9 w-9 flex items-center justify-center rounded-lg bg-[#0E2245] text-white">
            <i class="fa-solid fa-handshake"></i>
        </div>
        <h1 class="text-lg font-semibold text-gray-800">Lead Manager</h1>
    </div>

    <!-- Navigation -->
    <div class="p-4 flex-1">
        <ul class="space-y-1">
            <!-- Dashboard -->
            <li>
                <button @click="activeTab = 'dashboard'; sidebarOpen = false"
                    :class="activeTab === 'dashboard' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-gauge text-base h-5 w-5"></i>
                    <span>Dashboard</span>
                </button>
            </li>

            <!-- Leads -->
            <li>
                <button @click="activeTab = 'clients'; sidebarOpen = false"
                    :class="activeTab === 'clients' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-address-book text-base h-5 w-5"></i>
                    <span>Assigned Leads</span>
                </button>
            </li>

           

            <!-- Completed Leads -->
            <li>
                <button @click="activeTab = 'completedleads'; sidebarOpen = false"
                    :class="activeTab === 'completedleads' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-user-check text-base h-5 w-5"></i>
                    <span>Completed Leads</span>
                </button>
            </li>
        </ul>

    </div>

    <!-- Footer -->
    <div class="p-4 border-t">
        <button @click="activeTab = 'logout'; sidebarOpen = false"
            class="flex items-center gap-3 w-full text-left p-2 rounded-md hover:bg-red-100 text-gray-700 text-sm font-medium transition">
            <i class="fa-solid fa-right-from-bracket text-red-500 text-base"></i>
            <span>Logout</span>
        </button>
    </div>
</aside>
