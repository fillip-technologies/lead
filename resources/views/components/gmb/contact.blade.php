<section id="contact" class="py-12 px-4 relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-primary-glow/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto max-w-6xl">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4 animate-fade-in">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800">Let's Build Something <span
                    class="text-[#105278]">Amazing</span></h2>
            <p class="text-lg text-muted-foreground">Ready to transform your digital presence? Get in touch with us
                today</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 items-start">
            <div class="space-y-6 animate-fade-in">
                <div
                    class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 glass border-primary/10 shadow-elegant">
                    <h3 class="text-2xl font-semibold mb-6">Get In Touch</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 rounded-lg bg-[#105278] text-white flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-mail w-5 h-5 text-primary-foreground">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium mb-1">Email Us</div><a href="mailto:info@filliptechnologies.com"
                                    class="text-muted-foreground hover:text-primary transition-colors">info@filliptechnologies.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 rounded-lg bg-[#105278] text-white flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-phone w-5 h-5 text-primary-foreground">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium mb-1">Call Us</div><a href="tel:+917545999990"
                                    class="text-muted-foreground hover:text-primary transition-colors">+91-7545999990
                                </a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div
                                class="w-12 h-12 rounded-lg bg-[#105278] text-white flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-map-pin w-5 h-5 text-primary-foreground">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <div class="font-medium mb-1">Visit Us</div>
                                <p class="text-muted-foreground">A3, Ground Floor, Beside Kalyan Jewellers,
                                    <br>Near Chandan Hero, Kankarbagh Main Road, <br> Patna, Bihar - 800020
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-border">
                        <h4 class="font-extrabold mb-4 text-[#105278]">Business Hours</h4>
                        <div class="space-y-2 text-sm text-muted-foreground">
                            <div class="flex justify-between text-gray-700"><span>Monday - Saturday</span><span
                                    class="text-foreground text-gray-700">9:00 AM - 6:00 PM</span></div>
                            <div class="flex justify-between text-gray-700"><span>Sunday</span><span
                                    class="text-foreground text-gray-700">Closed</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm p-8 glass border-primary/10 shadow-elegant animate-fade-in"
                style="animation-delay: 0.2s;">
                <form class="space-y-6" method="POST" action="{{ route('gmb.store') }}">
                    @csrf
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="name">Full Name *</label>
                        <input
                            class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-primary/20 focus:border-primary"
                            id="name" name="name" required="" placeholder="John Doe" value="">
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="email">Email Address *</label>
                        <input type="email"
                            class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-primary/20 focus:border-primary"
                            id="email" name="email" required="" placeholder="john@example.com" value="">
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="phone">Phone Number</label>
                        <input type="tel"
                            class="flex h-10 w-full rounded-md border px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-background/50 border-primary/20 focus:border-primary"
                            id="phone" name="phone" required="" placeholder="+1 (234) 567-890"
                            value="">
                    </div>
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="message">Your Message *</label>
                        <textarea
                            class="flex min-h-[80px] w-full rounded-md border px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 bg-background/50 border-primary/20 focus:border-primary resize-none"
                            id="message" name="message" required="" placeholder="Tell us about your project..." rows="5"></textarea>
                    </div>
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-[#105278] hover:bg-[#105278]/90 text-white hover:scale-105 hover:shadow-glow shadow-elegant h-11 rounded-md px-8 w-full"
                        type="submit">Send Message
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-send ml-2 w-4 h-4">
                            <path
                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                            </path>
                            <path d="m21.854 2.147-10.94 10.939"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


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
