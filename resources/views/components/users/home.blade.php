<section x-data="{ activeTab: 'dashboard', sidebarOpen: false }" class="bg-white min-h-screen flex">

    <!-- Sidebar -->

    <x-users.sidebar />

    <!-- Main Content -->
    <main class="flex-1 p-6 lg:ml-0 h-screen overflow-y-auto">
        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = true" class="mb-4 lg:hidden bg-[#0E2245] text-white px-4 py-2 rounded">
            ☰ Menu
        </button>

        <!-- Tabs -->
        <div x-show="activeTab === 'dashboard'" x-cloak>
            <x-users.dashboard />

        </div>

        <div x-show="activeTab === 'clients'" x-cloak>
            <x-users.AssignedLeads />
        </div>

        <div x-show="activeTab === 'completedleads'" x-cloak>
            <x-users.CompletedLeads />
        </div>


        <div x-show="activeTab === 'logout'" x-cloak>
            <h2 class="text-2xl font-semibold mb-4 text-red-500">You have logged out!</h2>
        </div>
    </main>
</section>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
