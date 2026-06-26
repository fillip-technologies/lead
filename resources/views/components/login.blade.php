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

        <!-- Sign-in Card -->
        <div class="rounded-lg bg-card text-card-foreground border-2 shadow-lg">
            <div class="flex flex-col p-6 space-y-1">
                <h3 class="font-semibold tracking-tight text-2xl">Sign In</h3>
                <p class="text-sm text-muted-foreground">Enter your credentials to continue</p>
            </div>

            <div class="p-6 pt-0">
                <form action="{{ route('users.login') }}" method="POST" class="space-y-4">
                    @csrf

                    {{-- <!-- User Type -->
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="user_type">User Type</label>
                        <div class="relative">
                            <i class="fa-solid fa-users absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>
                            <select id="user_type" name="user_type" required
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base pl-10 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 text-gray-700 md:text-sm">
                                <option value="">Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Users</option>
                            </select>
                        </div>
                    </div> --}}

                    <!-- Username -->
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="username">Email</label>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-mail absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-10 6L2 7"></path>
                            </svg>

                            <input type="text"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                id="email" placeholder="Enter email" name="email" required
                                value="">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="password">Password</label>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-lock absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <input type="password"
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm pl-10"
                                id="password" placeholder="Enter password" name="password" required value="">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-11 rounded-md px-8 w-full"
                        type="submit">Sign In</button>
                </form>

                <!-- Info Note -->

                <div class="mt-4 p-3 bg-muted/50 rounded-md">
                    <p class=" text-muted-foreground text-center">
                        <i class="fa-solid fa-key mr-1"></i>
                        Sign in to access your dashboard
                    </p>
                </div>
                <div class="-mt-2 p-3 bg-muted/50 rounded-md">
                    <p class="text-xs text-muted-foreground text-center">
                        <i class="fa-solid fa-user-plus mr-1"></i>
                        Don't have an account?
                        <a href="/registration" class="text-blue-600 font-medium hover:underline">Register</a>
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



{{-- <script>
    @if (session('success'))
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#105278"
        });
    @endif
</script> --}}


<script>
    // SUCCESS MESSAGE
    @if (session('success'))
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonColor: "#0866ff"
        });
    @endif

    // ERROR MESSAGE (Email or Password Errors)
    @if ($errors->any())
        Swal.fire({
            title: "Error!",
            text: "{{ $errors->first() }}",
            icon: "error",
            confirmButtonColor: "#d33"
        });
    @endif
</script>
