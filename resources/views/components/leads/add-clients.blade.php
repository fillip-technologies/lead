@props(['industries' => [], 'ratings' => [], 'sources' => []])

<main class="flex-1 w-full">

    <div class="p-6">
        @if (session('success'))
            <div class="mb-4 rounded-md bg-green-100 p-3 text-green-800">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-4 rounded-md bg-red-100 p-4 text-red-800">
                <p class="font-semibold mb-2">Please fix the following errors:</p>
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="mx-auto">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-foreground mb-2">Add New Lead</h2>
                    <p class="text-muted-foreground">Fill in the Lead details and service requirements</p>
                </div>
                <button onclick="document.getElementById('bulkUploadSection').scrollIntoView({behavior:'smooth'})"
                    class="inline-flex items-center gap-2 bg-gray-800 text-white hover:bg-gray-700 h-10 rounded-md px-5 text-sm font-medium transition-colors self-start">
                    <i class="fa-solid fa-file-csv"></i> Bulk Upload CSV
                </button>
            </div>
            <div class="rounded-lg border bg-white text-card-foreground shadow-sm">
                <div class="flex flex-col space-y-1.5 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Lead Information</h3>
                    <p class="text-sm text-muted-foreground">Enter the basic details of your new Lead</p>
                </div>
                <div class="p-6 pt-0">
                    <form class="space-y-6" method="POST" action="{{ route('leads.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="name">Lead Name *</label>
                                <input
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="name" placeholder="Username"  value="" name="name">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="email">Email </label>
                                <input type="text"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="email" placeholder="user@example.com"  value=""
                                    name="email">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="phone">Phone Number</label>
                                <input type="tel"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="phone" placeholder="+1 234 567 8900" value="" name="phone">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="company">Message</label>
                                <input
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="company" placeholder="Message" value="" name="message">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="status">Status *</label>
                                <select id="status" name="status"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="New Lead">New Lead</option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="source">Lead Source*</label>
                                <select id="source" name="source"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="">— Select Source —</option>
                                    @foreach ($sources as $src)
                                        <option value="{{ $src->name }}" @selected(old('source') === $src->name)>{{ $src->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="rating">Lead Rating*</label>
                                <select id="rating" name="rating"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="">— Select Rating —</option>
                                    @foreach ($ratings as $rat)
                                        <option value="{{ $rat->name }}" @selected(old('rating') === $rat->name)>{{ $rat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="industry">Lead Industry*</label>
                                <select id="industry" name="industry"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="">— Select Industry —</option>
                                    @foreach ($industries as $ind)
                                        <option value="{{ $ind->name }}" @selected(old('industry') === $ind->name)>{{ $ind->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="ourservices">Our Services*</label>
                                <select id="services" name="services"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="SEO">SEO</option>
                                    <option value="Google Ads">Google Ads</option>
                                    <option value="Graphics">Graphics</option>
                                    <option value="Content Writing">Content Writing</option>
                                    <option value="Website">Website</option>
                                    <option value="App">App</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                    for="company">Description</label>
                                <input
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                    id="company" placeholder="Message" value="" name="description">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="ourservices">Country*</label>
                                <select id="country" name="country"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="Germany">Germany</option>
                                    <option value="UK">UK</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="ourservices">State*</label>
                                <select id="state" name="state"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="Bihar">Bihar</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Uttrakhand">Uttrakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="ourservices">District*</label>
                                <select id="district" name="district"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-ring">
                                    <option value="Nalanda">Nalanda</option>
                                    <option value="Patna">Patna</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="deadline">Expected Deadline</label>
                            <input type="date"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                id="deadline" value="" name="deadline">
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="notes">Additional Notes</label>
                            <textarea
                                class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                id="notes" name="notes" placeholder="Any additional information about the Lead or project..."
                                rows="4"></textarea>
                        </div>
                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-11 rounded-md px-8 w-full"
                            type="submit">Add Lead</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bulk Upload Section -->
        <div id="bulkUploadSection" class="mt-8 rounded-lg border bg-white text-card-foreground shadow-sm">
            <div class="flex flex-col space-y-1.5 p-6 border-b">
                <h3 class="text-2xl font-semibold leading-none tracking-tight flex items-center gap-2">
                    <i class="fa-solid fa-file-csv text-blue-600"></i> Bulk Upload Leads
                </h3>
                <p class="text-sm text-muted-foreground">Import multiple leads at once by uploading a CSV file</p>
            </div>
            <div class="p-6">

                @if (session('bulk_success'))
                    <div class="mb-4 rounded-md bg-green-100 p-3 text-green-800 flex items-center gap-2">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ session('bulk_success') }}
                    </div>
                @endif

                @if (session('bulk_errors') && count(session('bulk_errors')) > 0)
                    <div class="mb-4 rounded-md bg-yellow-100 p-4 text-yellow-800">
                        <p class="font-semibold mb-2 flex items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            Some rows were skipped due to errors:
                        </p>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            @foreach (session('bulk_errors') as $bulkError)
                                <li>{{ $bulkError }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('leads.bulk-upload') }}" enctype="multipart/form-data"
                    class="space-y-5">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none" for="csv_file">Select CSV File *</label>
                        <input type="file" id="csv_file" name="csv_file" accept=".csv,.txt"
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm text-gray-700 file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-gray-600 cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('csv_file')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap items-center gap-4">
                        <button type="submit"
                            class="inline-flex items-center justify-center gap-2 bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-10 rounded-md px-6 text-sm font-medium transition-colors">
                            <i class="fa-solid fa-upload"></i> Upload & Import
                        </button>
                        <a href="{{ route('leads.sample-csv') }}"
                            class="inline-flex items-center gap-2 text-sm text-blue-600 hover:underline font-medium">
                            <i class="fa-solid fa-download"></i> Download Sample Template
                        </a>
                    </div>

                    <div class="rounded-md bg-gray-50 border p-4 text-xs text-gray-500 space-y-1">
                        <p class="font-semibold text-gray-700 text-sm mb-2">CSV Column Order</p>
                        <p>name, email, phone, message, <strong>status</strong>, source, rating, <strong>industry</strong>, <strong>services</strong>, description, <strong>country</strong>, <strong>state</strong>, <strong>district</strong>, deadline, notes</p>
                        <p class="mt-1">Bold fields are required. Status must be one of: <em>New Lead, Contacted, In Progress, Completed</em>.</p>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>
