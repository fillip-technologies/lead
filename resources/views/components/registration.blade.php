<div class="min-h-screen flex flex-col items-center justify-center p-4 relative">

    <!-- Logo -->
    <div class="absolute top-4 left-6 flex items-center gap-3">
        <img src="{{ asset('images/filliplogonew-1024x196.png') }}" alt="Company Logo" class="h-10 w-auto">
    </div>

    <!-- Card -->
    <div class="w-full max-w-lg">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-3">
                The Client Leads Manager
            </h1>

            <div class="flex items-center justify-center gap-3">
                <h1 class="text-lg font-semibold text-gray-700">Fillip</h1>
                <i class="fa-solid fa-handshake text-blue-600 text-2xl"></i>
                <h1 class="text-lg font-semibold text-gray-700">Client</h1>
            </div>
        </div>

        <!-- Register Card -->
        <div class="rounded-lg bg-card text-card-foreground border-2 shadow-lg">
            <div class="flex flex-col p-6 space-y-1">
                <h3 class="font-semibold tracking-tight text-2xl">Create Account</h3>
                <p class="text-sm text-muted-foreground">Fill your details to register</p>
            </div>

            <div class="p-6 pt-0">
                <form action="{{ route('users.registration') }}" method="POST" class="space-y-4">
                    @csrf


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Full Name -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="name">Full Name</label>
                            <div class="relative">
                                <i class="fa-solid fa-user absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>
                                <input type="text" id="name" name="name" placeholder="Enter your full name"
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base pl-10 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="email">Email</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-mail absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-10 6L2 7"></path>
                                </svg>
                                <input type="email" id="email" name="email" placeholder="Enter email" required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background pl-10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />
                            </div>
                        </div>

                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Phone -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="phone">Phone</label>
                            <div class="relative">
                                <i class="fa-solid fa-phone absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>
                                <input type="tel" id="phone" name="phone" placeholder="Enter phone number"
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background pl-10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="location">Location</label>
                            <div class="relative">
                                <i
                                    class="fa-solid fa-location-dot absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>
                                <input type="text" id="location" name="location" placeholder="Enter location"
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background pl-10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />
                            </div>
                        </div>

                    </div>

                    <!-- User Type -->
                    {{-- <div class="space-y-2">
                        <label class="text-sm font-medium leading-none" for="user_type">User Type</label>
                        <div class="relative">
                            <i class="fa-solid fa-users absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>
                            <select id="user_type" name="user_type" required
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base pl-10 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm">
                                <option value="">Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="client">Client</option>
                            </select>
                        </div>
                    </div> --}}

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Password -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="password">Password</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-lock absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2">
                                    </rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>

                                <input type="password" id="password" name="password" placeholder="Enter password"
                                    required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base pl-10 pr-10 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />

                                <!-- eye button -->
                                <button type="button"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 z-10 h-6 w-6 p-0 flex items-center justify-center"
                                    data-toggle="password" aria-label="Toggle password visibility">
                                    <!-- eye (visible) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4" data-icon="eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <!-- eye-off (hidden) - hidden by default -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4 hidden" data-icon="eye-off">
                                        <path
                                            d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a21.14 21.14 0 0 1 5.06-6.06">
                                        </path>
                                        <path d="M1 1l22 22"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="confirm_password">Confirm
                                Password</label>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-lock absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2">
                                    </rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>

                                <input type="password" id="confirm_password" name="password_confirmation" placeholder="Confirm password" required
                                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base pl-10 pr-10 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm" />

                                <!-- eye button -->
                                <button type="button"
                                    class="absolute right-2 top-1/2 -translate-y-1/2 z-10 h-6 w-6 p-0 flex items-center justify-center"
                                    data-toggle="confirm_password" aria-label="Toggle confirm password visibility">
                                    <!-- eye (visible) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4" data-icon="eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <!-- eye-off (hidden) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="h-4 w-4 hidden" data-icon="eye-off">
                                        <path
                                            d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-11-8-11-8a21.14 21.14 0 0 1 5.06-6.06">
                                        </path>
                                        <path d="M1 1l22 22"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>



                    </div>

                    <!-- Submit Button -->
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-11 rounded-md px-8 w-full"
                        type="submit">Register</button>
                </form>

                <!-- Info Note -->
                <div class="mt-4 p-3 bg-muted/50 rounded-md">
                    <p class="text-xs text-muted-foreground text-center">
                        <i class="fa-solid fa-user-plus mr-1"></i>
                        Already have an account?
                        <a href="/" class="text-blue-600 font-medium hover:underline">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} Fillip Technologies. All rights reserved.
    </div>
</div>



<!-- Minimal JS for toggling (place once on the page) -->
<script>
    document.querySelectorAll('button[data-toggle]').forEach(btn => {
        btn.addEventListener('click', () => {
            const inputId = btn.getAttribute('data-toggle');
            const input = document.getElementById(inputId);
            if (!input) return;
            const isPwd = input.type === 'password';
            input.type = isPwd ? 'text' : 'password';

            // toggle icons
            const eye = btn.querySelector('[data-icon="eye"]');
            const eyeOff = btn.querySelector('[data-icon="eye-off"]');
            if (eye && eyeOff) {
                eye.classList.toggle('hidden');
                eyeOff.classList.toggle('hidden');
            }
        });
    });
</script>


<script>
    @if (session('success'))
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#105278"
        });
    @endif
</script>
