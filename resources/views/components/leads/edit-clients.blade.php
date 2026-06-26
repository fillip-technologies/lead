<main class="flex-1 w-full">
    <div class="p-6">
        <div class="mx-auto">
            <a href="/">
                <button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent text-[#0866ff] hover:text-[#0866ff]/70 h-10 py-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left h-4 w-4">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>Back to Leads</button>
            </a>
            <div class="mb-6">
                <h2 class="text-3xl font-bold text-foreground mb-2">Edit Lead</h2>
                <p class="text-muted-foreground">Update Lead details and service requirements</p>
            </div>

            <div class="rounded-lg border bg-white text-card-foreground shadow-sm">
                <div class="flex flex-col space-y-1.5 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Lead Information</h3>
                    <p class="text-sm text-muted-foreground">Modify the Lead details as needed</p>
                </div>

                <div class="p-6 pt-0">
                    <form action="{{ route('leads.update', $lead->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <!-- Lead Name + Email -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="name">Lead Name *</label>
                                <input id="name" type="text" name="name"
                                    value="{{ old('name', $lead->name) }}"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                    placeholder="Username" value="Mohit Kumar" required />
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="email">Email *</label>
                                <input id="email" type="email" name="email"
                                    value="{{ old('email', $lead->email) }}"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                    placeholder="user@example.com" value="mohit@example.com" required />
                            </div>
                        </div>

                        <!-- Phone + Message -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="phone">Phone Number*</label>
                                <input id="phone" type="tel" name="phone"
                                    value="{{ old('phone', $lead->phone) }}"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                    placeholder="+1 234 567 8900" value="8939567810" />
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="message">Message*</label>
                                <input id="message" type="text" name="message"
                                    value="{{ old('message', $lead->message) }}"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                    placeholder="Message" value="Looking for website redesign" />
                            </div>
                        </div>

                        <!-- Status + Lead Source -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="status">Status</label>
                                <select id="status" name="status"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="New Lead" {{ $lead->status == 'New Lead' ? 'selected' : '' }}>New
                                        Lead</option>
                                    <option value="Contacted" {{ $lead->status == 'Contacted' ? 'selected' : '' }}
                                        selected>Contacted</option>
                                    <option value="In Progress" {{ $lead->status == 'In Progress' ? 'selected' : '' }}>
                                        In Progress</option>
                                    <option value="Completed" {{ $lead->status == 'Completed' ? 'selected' : '' }}>
                                        Completed</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="source">Lead Source*</label>
                                <select id="source" name="source"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="Advertisement"
                                        {{ $lead->source == 'Advertisement' ? 'selected' : '' }}>Advertisement</option>
                                    <option value="Social Media"
                                        {{ $lead->source == 'Social Media' ? 'selected' : '' }}>Social Media</option>
                                    <option value="GoogleAds" {{ $lead->source == 'GoogleAds' ? 'selected' : '' }}>
                                        Google Ads</option>
                                </select>
                            </div>

                            
                        </div>

                        <!-- Lead Rating + Industry -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="rating">Lead Rating*</label>
                                <select id="rating" name="rating"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="None" {{ $lead->rating == 'None' ? 'selected' : '' }}>None
                                    </option>
                                    <option value="High" {{ $lead->rating == 'High' ? 'selected' : '' }}>High
                                    </option>
                                    <option value="Medium" {{ $lead->rating == 'Medium' ? 'selected' : '' }}>Medium
                                    </option>
                                    <option value="Low" {{ $lead->rating == 'Low' ? 'selected' : '' }}>Low
                                    </option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="industry">Lead
                                    Industry*</label>
                                <select id="industry" name="industry"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="IT Company" {{ $lead->industry == 'IT Company' ? 'selected' : '' }}>
                                        IT
                                        Company</option>
                                    <option value="Sales & Marketing"
                                        {{ $lead->industry == 'Sales & Marketing' ? 'selected' : '' }}>
                                        Sales & Marketing</option>
                                    <option value="Digital Marketing"
                                        {{ $lead->industry == 'Digital Marketing' ? 'selected' : '' }}>
                                        Digital Marketing</option>
                                    <option value="Finance Support"
                                        {{ $lead->industry == 'Finance Support' ? 'selected' : '' }}>
                                        Finance Support</option>
                                </select>
                            </div>
                        </div>

                        <!-- Our Services + Description -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="services">Our
                                    Services*</label>
                                <select id="services" name="services"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="Digital Marketing"
                                        {{ $lead->services == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing
                                    </option>
                                    <option value="SEO" {{ $lead->services == 'SEO' ? 'selected' : '' }}>SEO</option>
                                    <option value="Google Ads" {{ $lead->services == 'Google Ads' ? 'selected' : '' }}>
                                        Google Ads</option>
                                    <option value="Graphics" {{ $lead->services == 'Graphics' ? 'selected' : '' }}>
                                        Graphics</option>
                                    <option value="Content Writing"
                                        {{ $lead->services == 'Content Writing' ? 'selected' : '' }}>Content Writing
                                    </option>
                                    <option value="Website" {{ $lead->services == 'Website' ? 'selected' : '' }}>Website
                                    </option>
                                    <option value="App" {{ $lead->services == 'App' ? 'selected' : '' }}>App</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="description">Description</label>
                                <input id="description" type="text" name="description"
                                    value="{{ old('description', $lead->description) }}"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                    placeholder="Message" value="Needs SEO and Ad management" />
                            </div>
                        </div>

                        <!-- Country + State + District -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="country">Country*</label>
                                <select id="country" name="country"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="India" {{ $lead->status == 'India' ? 'selected' : '' }}>India
                                    </option>
                                    <option value="USA" {{ $lead->status == 'USA' ? 'selected' : '' }}>USA</option>
                                    <option value="Germany" {{ $lead->status == 'Germany' ? 'selected' : '' }}>Germany
                                    </option>
                                    <option value="UK" {{ $lead->status == 'UK' ? 'selected' : '' }}>UK</option>
                                    <option value="Australia" {{ $lead->status == 'Australia' ? 'selected' : '' }}>
                                        Australia</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="state">State*</label>
                                <select id="state" name="state"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="Bihar" {{ $lead->status == 'Bihar' ? 'selected' : '' }}>Bihar
                                    </option>
                                    <option value="Punjab" {{ $lead->status == 'Punjab' ? 'selected' : '' }}>Punjab
                                    </option>
                                    <option value="Uttrakhand" {{ $lead->status == 'Uttrakhand' ? 'selected' : '' }}>
                                        Uttrakhand</option>
                                    <option value="West Bengal"
                                        {{ $lead->status == 'West Bengal' ? 'selected' : '' }}>West Bengal</option>
                                </select>
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-medium leading-none" for="district">District*</label>
                                <select id="district" name="district"
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-ring">
                                    <option value="Nalanda" {{ $lead->status == 'Nalanda' ? 'selected' : '' }}>Nalanda
                                    </option>
                                    <option value="Patna" {{ $lead->status == 'Patna' ? 'selected' : '' }}>Patna
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Deadline -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="deadline">Expected Deadline</label>
                            <input id="deadline" type="date" name="deadline"
                                value="{{ old('deadline', $lead->deadline) }}"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus-visible:ring-2 focus-visible:ring-ring"
                                value="2024-12-31" />
                        </div>

                        <!-- Notes -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="notes">Additional Notes</label>
                            <textarea id="notes" rows="4" name="notes" value="{{ old('notes', $lead->notes) }}"
                                class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm focus-visible:ring-2 focus-visible:ring-ring"
                                placeholder="Any additional information about the Lead or project...">Sample Lead notes</textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-3">
                            <button type="submit"
                                class="inline-flex items-center justify-center gap-2 text-sm font-medium bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-11 rounded-md px-8 flex-1 focus-visible:ring-2 focus-visible:ring-ring">
                                Update Lead
                            </button>

                            <button type="button" onclick="window.history.back()"
                                class="inline-flex items-center justify-center gap-2 text-sm font-medium border border-input bg-background hover:bg-[#0866ff] hover:text-white h-11 rounded-md px-8">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
