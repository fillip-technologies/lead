<main class="flex-1 w-full">

    <div class="p-6">
        <div class="mx-auto">
            <div class="mb-6">
                <h2 class="text-3xl font-bold text-foreground mb-2">Add New Lead Address</h2>
                <p class="text-muted-foreground">Fill in the Lead Address details</p>
            </div>
            <div class="rounded-lg border bg-white text-card-foreground shadow-sm">
                <div class="flex flex-col space-y-1.5 p-6">
                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Lead Address Information</h3>
                    <p class="text-sm text-muted-foreground">Enter the new lead address</p>
                </div>
                <div class="p-6 pt-0">
                    <form class="space-y-6">

                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="name">Lead Address Name *</label>
                            <input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                                id="name" placeholder="Username" required="" value="">
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="notes">Additional Notes</label>
                            <textarea
                                class="flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                id="notes" placeholder="Any additional information about the Lead or project..." rows="4"></textarea>
                        </div>


                        <button
                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-11 rounded-md px-8 w-full"
                            type="submit">Add Lead Address</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
