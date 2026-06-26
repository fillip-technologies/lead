<main class="flex-1 w-full">

    <div class="p-6">
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Dashboards</h2>
                <p class="text-muted-foreground">Overview of your Lead management system</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-muted-foreground">Total Leads</p>
                                <p class="text-3xl font-bold text-foreground mt-2">{{ $totalLeads }}</p>
                            </div>
                            <div class="bg-blue-500 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-users h-6 w-6 text-white">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-muted-foreground">Active Leads</p>
                                <p class="text-3xl font-bold text-foreground mt-2">{{ $activeLeads }}</p>
                            </div>
                            <div class="bg-green-500 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trending-up h-6 w-6 text-white">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-muted-foreground">Completed Leads</p>
                                <p class="text-3xl font-bold text-foreground mt-2">{{ $completedLeads }}</p>
                            </div>
                            <div class="bg-yellow-500 p-3 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-clock h-6 w-6 text-white">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-foreground mb-4">Services</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

                    @foreach ($servicesStats as $item)
                        <div
                            class="rounded-lg border bg-card text-card-foreground shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex flex-col space-y-1.5 p-6 pb-3">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-megaphone h-8 w-8 text-blue-600 mb-2">
                                <path d="m3 11 18-5v12L3 14v-3z"></path>
                                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path>
                            </svg> --}}
                                <h3 class="tracking-tight text-base">{{ $item->services ?? 'NA' }}</h3>
                            </div>
                            <div class="p-6 pt-0">
                                <p class="text-2xl font-bold text-foreground">{{ $item->total }}</p>
                                <p class="text-xs text-muted-foreground">Leads</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

          <div>
    <h3 class="text-2xl font-bold text-gray-800 mb-5">Campaign Stats</h3>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

        <!-- Website Campaign -->
        <div class="rounded-xl border bg-white shadow-sm hover:shadow-lg transition-all p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="h-10 w-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <h3 class="font-medium text-sm">Website Campaign</h3>
            </div>
            <p class="text-3xl font-bold text-gray-900">{{ $totalwebsite }}</p>
            <p class="text-xs text-gray-500">Users</p>
        </div>

        <!-- Digital Marketing Campaign -->
        <div class="rounded-xl border bg-white shadow-sm hover:shadow-lg transition-all p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="h-10 w-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h3 class="font-medium text-sm">Digital Marketing</h3>
            </div>
            <p class="text-3xl font-bold text-gray-900">{{ $totaldigitalmarketing }}</p>
            <p class="text-xs text-gray-500">Users</p>
        </div>

        <!-- Social Media Marketing -->
        <div class="rounded-xl border bg-white shadow-sm hover:shadow-lg transition-all p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="h-10 w-10 bg-pink-100 text-pink-600 rounded-lg flex items-center justify-center">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <h3 class="font-medium text-sm">Social Media Marketing</h3>
            </div>
            <p class="text-3xl font-bold text-gray-900">{{ $totalsocialmedia }}</p>
            <p class="text-xs text-gray-500">Users</p>
        </div>

        <!-- GMB Campaign -->
        <div class="rounded-xl border bg-white shadow-sm hover:shadow-lg transition-all p-5">
            <div class="flex items-center gap-3 mb-3">
                <div class="h-10 w-10 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <h3 class="font-medium text-sm">GMB Campaign</h3>
            </div>
            <p class="text-3xl font-bold text-gray-900">{{ $totalgmb }}</p>
            <p class="text-xs text-gray-500">Users</p>
        </div>

    </div>
</div>

        </div>
    </div>
</main>
