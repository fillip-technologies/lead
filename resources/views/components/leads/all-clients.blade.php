{{-- <main class="flex-1 w-full">

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
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-red-500">
                                In Progress</div>
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
                                    Website
                                </div>

                            </div>
                        </div>
                        <div class="pt-2 border-t flex items-center justify-between">
                            <p class="text-sm font-semibold text-foreground">Budget: ₹5,000</p>
                            <a href="/edit">
                                <button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-background hover:bg-[#0866ff] hover:text-white h-9 rounded-md px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-square-pen h-4 w-4 mr-1">
                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path
                                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z">
                                        </path>
                                    </svg>Edit</button>
                            </a>
                            <button
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors border border-input bg-background hover:bg-green-600 hover:text-white h-9 rounded-md px-3"
                                onclick="openAssignModal('John Doe')">
                                <i class="fa-solid fa-user-check text-sm"></i>
                                Assign
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> --}}

{{-- @props(['leads' => [$leads]]) --}}

<main class="flex-1 w-full">
    <div class="p-6">
        <div class="space-y-6">
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Leads List</h2>
                <p class="text-muted-foreground">View and manage all your leads</p>
            </div>

            <!-- Leads Grid -->
            <!-- Leads Table -->
            <div class="overflow-x-auto rounded-lg border shadow-sm bg-white">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100 border-b">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Name</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Email</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Phone</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Industry</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Services</th>
                            <th class="px-4 py-3 text-left font-semibold text-gray-700">Status</th>
                            <th class="px-4 py-3 text-center font-semibold text-gray-700">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($leads as $lead)
                            <tr class="border-b hover:bg-gray-50 transition">

                                <!-- Name -->
                                <td class="px-4 py-3 text-gray-800 font-medium whitespace-nowrap">
                                    {{ $lead->name }}
                                </td>

                                <!-- Email -->
                                <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                                    {{ $lead->email }}
                                </td>

                                <!-- Phone -->
                                <td class="px-4 py-3 text-gray-700 whitespace-nowrap">
                                    {{ $lead->phone }}
                                </td>

                                <!-- Industry -->
                                <td class="px-4 py-3 text-gray-800 font-semibold whitespace-nowrap">
                                    {{ $lead->industry }}
                                </td>

                                <!-- Services -->
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span
                                        class="inline-block bg-gray-100 px-2 py-1 rounded-full text-xs font-medium border">
                                        {{ $lead->services }}
                                    </span>
                                </td>

                                <!-- Status -->
                                <td class="px-4 py-3 whitespace-nowrap">
                                    <span
                                        class="px-2.5 py-1 text-xs text-white rounded-full
                        {{ $lead->status == 'Completed' ? 'bg-green-500' : ($lead->status == 'In Progress' ? 'bg-yellow-500' : 'bg-red-500') }}">
                                        {{ ucfirst($lead->status) }}
                                    </span>
                                </td>

                                <!-- Actions -->
                                <td class="px-4 py-3 text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center gap-3">

                                        <!-- Edit Button -->
                                        <a href="{{ route('edit', $lead->id) }}">
                                            <button
                                                class="px-3 py-1.5 text-sm border rounded-md hover:bg-blue-600 hover:text-white transition font-medium flex items-center gap-1.5">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                            </button>
                                        </a>

                                        <!-- Assign Button -->
                                        <button
                                            class="px-3 py-1.5 text-sm border rounded-md hover:bg-green-600 hover:text-white transition font-medium flex items-center gap-1.5"
                                            onclick="openAssignModal('{{ $lead->name }}')">
                                            <i class="fa-solid fa-user-check"></i> Assign
                                        </button>

                                    </div>
                                </td>

                            </tr>
                        @endforeach

                        @if (count($leads) === 0)
                            <tr>
                                <td colspan="7" class="text-center py-5 text-gray-500">No leads found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>



        </div>
    </div>
</main>



<!-- Modal Backdrop -->
<div id="assignModal"
    class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 transition-all duration-300 ease-out">

    <!-- Modal Box -->
    <div
        class="bg-white rounded-lg shadow-2xl w-full max-w-md p-6 relative transform transition-all duration-300 scale-95 animate-in fade-in zoom-in">

        <!-- Close Button -->
        <button onclick="closeAssignModal()"
            class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 transition">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <!-- Title -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fa-solid fa-tasks text-blue-600"></i>
            Assign Lead
        </h2>

        <!-- Form -->
        <form id="assignForm" class="space-y-4">

            <!-- Lead Info -->
            <div>
                <label for="leadName" class="text-sm font-medium text-gray-700">Lead Name</label>
                <input id="leadName" type="text" readonly
                    class="w-full h-10 mt-1 rounded-md border border-gray-300 bg-gray-100 px-3 text-sm text-gray-600 cursor-not-allowed">
            </div>

            <!-- Select User -->
            <div>
                <label for="userSelect"
                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                    Assign To
                </label>
                <div class="relative mt-1">
                    <i class="fa-solid fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                    <select id="userSelect" required
                        class="flex h-10 w-full rounded-md border border-gray-300 bg-white py-2 pl-7 text-sm text-gray-700
                        ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 transition">
                        <option value="">Select User</option>
                        <option value="1">Ananya Singh</option>
                        <option value="2">Somya Singh</option>
                        <option value="3">Navleen Kaur</option>
                    </select>
                </div>
            </div>

            <!-- Deadline -->
            <div>
                <label for="deadline" class="text-sm font-medium text-gray-700">Deadline</label>
                <input type="date" id="deadline"
                    class="w-full h-10 mt-1 rounded-md border border-gray-300 bg-white px-3 text-sm
                    text-gray-700 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 transition">
            </div>

            <!-- Notes -->
            <div>
                <label for="notes" class="text-sm font-medium text-gray-700">Notes (optional)</label>
                <textarea id="notes" rows="3"
                    class="w-full mt-1 rounded-md border border-gray-300 bg-white px-3 py-2 text-sm text-gray-700
                    focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2 transition"
                    placeholder="Add remarks or special instructions..."></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end pt-3 border-t border-gray-100 mt-4">
                <button type="button" onclick="closeAssignModal()"
                    class="mr-3 h-10 px-5 rounded-md border border-gray-300 text-sm text-gray-600 hover:bg-gray-100 transition">
                    Cancel
                </button>
                <button type="submit"
                    class="h-10 px-6 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700 transition">
                    Assign Task
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    function openAssignModal(leadName) {
        document.getElementById('leadName').value = leadName;
        document.getElementById('assignModal').classList.remove('hidden');
    }

    function closeAssignModal() {
        document.getElementById('assignModal').classList.add('hidden');
    }

    // Example of submission handler
    document.getElementById('assignForm').addEventListener('submit', (e) => {
        e.preventDefault();
        const lead = document.getElementById('leadName').value;
        const user = document.getElementById('userSelect').value;
        const deadline = document.getElementById('deadline').value;
        alert(`✅ Lead "${lead}" assigned to user ID: ${user} with deadline ${deadline}`);
        closeAssignModal();
    });
</script>
