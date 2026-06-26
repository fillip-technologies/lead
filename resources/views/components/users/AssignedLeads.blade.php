<main class="flex-1 w-full">

    <div class="p-6">
        <div class="space-y-6">
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Leads List</h2>
                <p class="text-muted-foreground">View and manage all your leads</p>
            </div>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="relative flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                        placeholder="Search leads..." value="">
                </div>
                <div class="space-y-2">
                    <select id="status"
                        class="flex h-10 w-full md:w-[200px] rounded-md border border-gray-300 bg-white px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>All Services</option>
                        <option>Website Development</option>
                        <option>App Development</option>
                        <option>SEO & Marketing</option>
                        <option>Content Creation</option>
                    </select>
                </div>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div
                    class="rounded-lg border bg-gray-50 text-card-foreground shadow-sm hover:shadow-lg transition-shadow">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <div class="flex items-start justify-between">
                            <h3 class="font-semibold tracking-tight text-lg">John Doe</h3>
                            {{-- <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-red-500">
                                In Progress</div> --}}
                            <select onchange="updateLeadStatus(this, 'lead123')"
                                class="text-xs font-medium rounded-full px-2.5 py-1 border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="In Progress" selected>In Progress</option>
                                <option value="Completed">Completed</option>
                                <option value="Pending">Pending</option>
                                <option value="Active">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-6 pt-0 space-y-3">
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-building h-4 w-4">
                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                <path d="M9 22v-4h6v4"></path>
                                <path d="M8 6h.01"></path>
                                <path d="M16 6h.01"></path>
                                <path d="M12 6h.01"></path>
                                <path d="M12 10h.01"></path>
                                <path d="M12 14h.01"></path>
                                <path d="M16 10h.01"></path>
                                <path d="M16 14h.01"></path>
                                <path d="M8 10h.01"></path>
                                <path d="M8 14h.01"></path>
                            </svg><span>Tech Corp</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail h-4 w-4">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg><span class="truncate">john@example.com</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-muted-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-phone h-4 w-4">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg><span>+1 234 567 8900</span>
                        </div>
                        <div class="pt-2 border-t">
                            <p class="text-xs font-medium text-muted-foreground mb-2">Services:</p>
                            <div class="flex flex-wrap gap-1">
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-gray-100 text-secondary-foreground hover:bg-gray-100/80 text-xs">
                                    Website</div>
                                <div
                                    class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-gray-100 text-secondary-foreground hover:bg-gray-100/80 text-xs">
                                    SEO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
