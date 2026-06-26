<main class="flex-1 w-full">
    <div class="p-6">
        <div class="space-y-6">
            <!-- Header -->
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Social Media Campaign</h2>
                <p class="text-muted-foreground">View and manage all your users</p>
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


            </div>
        </div>

        <!-- Table -->
        <section class="py-6">
            <div class="overflow-x-auto">
                <table class="w-full text-sm border rounded-lg border-gray-300 border-collapse">
                    <thead>
                        <tr class="border-b border-gray-300 bg-gray-50">
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Name</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Phone</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Registered Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialmedia as $data)
                            <tr class="border-b border-gray-300 transition">
                                {{-- <td class="px-4 py-3 text-gray-700 font-medium capitalize">{{ $data->name }}</td> --}}
                                <td class="px-4 py-3 font-medium capitalize">
                                    <a href="{{ route('socialmedia.show', $data->id) }}"
                                        class="text-gray-700 hover:text-blue-800 hover:underline">
                                        {{ $data->name }}
                                    </a>
                                </td>

                                <td class="px-4 py-3 text-gray-700">{{ $data->phone }}</td>
                                <td class="px-4 py-3 text-gray-700">{{ $data->email }}</td>
                                <td class="px-4 py-3 text-gray-700">{{ $data->created_at->format('d M Y') }}
                                </td>

                                <td class="px-4 py-3 text-right">
                                    <button class="text-red-500 hover:text-red-600 transition" title="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    @if (empty($socialmedia) || count($socialmedia) === 0)
                        <p class="text-center text-gray-500 mt-6">No data found.</p>
                    @endif
                </table>
            </div>
        </section>
    </div>
</main>
