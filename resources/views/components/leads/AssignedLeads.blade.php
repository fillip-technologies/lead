<main class="flex-1 w-full">
    <div class="p-6">
        <div class="space-y-6">
            <!-- Header -->
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Assigned Leads</h2>
                <p class="text-muted-foreground">View and manage all your assigned leads efficiently</p>
            </div>

            <!-- Filters Section -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <!-- Search -->
                <div class="relative flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
                    </svg>
                    <input type="text" placeholder="Search by name, company, or contact..."
                        class="w-full h-10 rounded-md border border-gray-300 pl-10 pr-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- Filter Options -->
                <div class="flex flex-wrap gap-3">
                    <select
                        class="h-10 rounded-md border border-gray-300 bg-white px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Services</option>
                        <option>Website Development</option>
                        <option>App Development</option>
                        <option>SEO & Marketing</option>
                        <option>Content Creation</option>
                    </select>

                    <select
                        class="h-10 rounded-md border border-gray-300 bg-white px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Locations</option>
                        <option>Delhi</option>
                        <option>Mumbai</option>
                        <option>Bangalore</option>
                        <option>Hyderabad</option>
                    </select>

                    <select
                        class="h-10 rounded-md border border-gray-300 bg-white px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Completed</option>
                    </select>

                    <select
                        class="h-10 rounded-md border border-gray-300 bg-white px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Assigned To</option>
                        <option>Riya Sharma</option>
                        <option>Rahul Singh</option>
                        <option>Amit Kumar</option>
                    </select>

                    <input type="date"
                        class="h-10 rounded-md border border-gray-300 bg-white px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
            </div>
        </div>

        <!-- Table -->
        <section class="py-6">
            <div class="overflow-x-auto">
                <table class="w-full text-sm border rounded-lg border-gray-300 border-collapse">
                    <thead>
                        <tr class="border-b border-gray-300 bg-gray-50">
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Users</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Contact</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Status</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Lead Assigned</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Assigned Date</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300 transition">
                            <td class="px-4 py-3 text-gray-800 font-medium">John Smith</td>
                            <td class="px-4 py-3 text-gray-700">9402070939</td>
                            <td class="px-4 py-3 text-gray-700">john@acme.com</td>
                            <td class="px-4 py-3 text-gray-700">
                                <select
                                    class="border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="Active" selected>Active</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </td>

                            <td class="px-4 py-3 text-gray-700">Tech Wonders</td>
                            <td class="px-4 py-3 text-gray-600">Oct 30, 2025</td>
                            <td class="px-4 py-3 text-right">
                                <button class="text-red-500 hover:text-red-600 transition" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-300 transition">
                            <td class="px-4 py-3 text-gray-800 font-medium">Mohit Kumar</td>
                            <td class="px-4 py-3 text-gray-700">8671070939</td>
                            <td class="px-4 py-3 text-gray-700">mohit@gmail.com</td>
                            <td class="px-4 py-3 text-gray-700">
                                <select
                                    class="border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="Pending">Pending</option>
                                    <option value="Active" selected>Active</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </td>

                            <td class="px-4 py-3 text-gray-700">App Wonders</td>
                            <td class="px-4 py-3 text-gray-600">Nov 30, 2025</td>
                            <td class="px-4 py-3 text-right">
                                <button class="text-red-500 hover:text-red-600 transition" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</main>
