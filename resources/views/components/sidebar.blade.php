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
    <!-- REMOVED x-data from here so it uses parent Alpine scope -->
    <div class="p-4 flex-1">
        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <button @click="activeTab = 'dashboard'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'dashboard' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-gauge text-base h-5 w-5"></i>
                    <span>Dashboard</span>
                </button>
            </li>

            <!-- Leads -->
            <li>
                <button @click="activeTab = 'clients'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'clients' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-address-book text-base h-5 w-5"></i>
                    <span>Leads</span>
                </button>
            </li>

            <!-- Add Lead -->
            <li>
                <button @click="activeTab = 'addclient'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'addclient' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-user-plus text-base h-5 w-5"></i>
                    <span>Add Lead</span>
                </button>
            </li>

            <!-- All Users -->
            <li> <button @click="activeTab = 'allusers'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'allusers' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition"> <i
                        class="fa-solid fa-users text-base h-5 w-5"></i> <span>All Users</span> </button> </li>

            <!-- Assigned Leads -->
            <li> <button @click="activeTab = 'assignedleads'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'assignedleads' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition"> <i
                        class="fa-solid fa-user-check text-base h-5 w-5"></i> <span>Assigned Leads</span> </button>
            </li>

            <!-- Lead Form -->
            <li>
                <button @click="leadFormOpen = !leadFormOpen"
                    :class="leadFormOpen ? 'bg-blue-50 text-blue-600 font-medium' : 'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center justify-between p-2 rounded-md text-left text-sm font-medium transition">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-file-lines text-base h-5 w-5"></i>
                        <span>Lead Form</span>
                    </div>
                    <i :class="leadFormOpen ? 'fa-chevron-up' : 'fa-chevron-down'" class="fa-solid text-xs"></i>
                </button>

                <!-- Submenu -->
                <ul x-show="leadFormOpen" x-transition class="mt-1 ml-8 space-y-1 text-sm">
                    <li>
                        <button @click="activeTab = 'leadindustry'; sidebarOpen = false"
                            :class="activeTab === 'leadindustry' ? 'text-blue-600 font-medium' :
                                'text-gray-700 hover:text-blue-600'"
                            class="w-full flex items-center gap-2 p-1 transition">
                            <i class="fa-solid fa-industry text-xs"></i>
                            <span>Lead Industry</span>
                        </button>
                    </li>

                    <li>
                        <button @click="activeTab = 'leadrating'; sidebarOpen = false"
                            :class="activeTab === 'leadrating' ? 'text-blue-600 font-medium' :
                                'text-gray-700 hover:text-blue-600'"
                            class="w-full flex items-center gap-2 p-1 transition">
                            <i class="fa-solid fa-star text-xs"></i>
                            <span>Lead Rating</span>
                        </button>
                    </li>

                    <li>
                        <button @click="activeTab = 'leadsource'; sidebarOpen = false"
                            :class="activeTab === 'leadsource' ? 'text-blue-600 font-medium' :
                                'text-gray-700 hover:text-blue-600'"
                            class="w-full flex items-center gap-2 p-1 transition">
                            <i class="fa-solid fa-globe text-xs"></i>
                            <span>Lead Source</span>
                        </button>
                    </li>

                    <li>
                        <button @click="activeTab = 'leadaddress'; sidebarOpen = false"
                            :class="activeTab === 'leadaddress' ? 'text-blue-600 font-medium' :
                                'text-gray-700 hover:text-blue-600'"
                            class="w-full flex items-center gap-2 p-1 transition">
                            <i class="fa-solid fa-map-marker-alt text-xs"></i>
                            <span>Lead Address</span>
                        </button>
                    </li>
                </ul>

            </li>

            {{-- Website Campaign --}}
            <li>
                <button @click="activeTab = 'website'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'website' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-globe text-base h-5 w-5"></i>
                    <span>Website Campaign</span>
                </button>
            </li>

            {{-- Digital Marketing Campaign --}}
            <li>
                <button @click="activeTab = 'digitalmarketing'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'digitalmarketing' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-bullhorn text-base h-5 w-5"></i>
                    <span>Digital Marketing Campaign</span>
                </button>
            </li>

            {{-- Social Media Campaign --}}
            <li>
                <button @click="activeTab = 'socialmedia'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'socialmedia' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-brands fa-facebook-f text-base h-5 w-5"></i>
                    <span>Social Media Campaign</span>
                </button>
            </li>

            {{-- GMB Campaign --}}
            <li>
                <button @click="activeTab = 'gmb'; sidebarOpen = false; leadFormOpen = false"
                    :class="activeTab === 'gmb' ? 'bg-blue-50 text-blue-600 font-medium' :
                        'text-gray-700 hover:bg-gray-100'"
                    class="w-full flex items-center gap-3 p-2 rounded-md text-left text-sm font-medium transition">
                    <i class="fa-solid fa-map-location-dot text-base h-5 w-5"></i>
                    <span>GMB Campaign</span>
                </button>
            </li>

        </ul>
    </div>

    <!-- Footer -->
    <div class="p-4 border-t">
        <button @click="activeTab = 'logout'; sidebarOpen = false; leadFormOpen = false"
            class="flex items-center gap-3 w-full text-left p-2 rounded-md hover:bg-red-100 text-gray-700 text-sm font-medium transition">
            <i class="fa-solid fa-right-from-bracket text-red-500 text-base"></i>
            <span>Logout</span>
        </button>
    </div>
</aside>
