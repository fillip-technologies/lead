@props(['industries' => []])

@php
    $input    = 'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
    $textarea = 'flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[72px]';
    $btnBlue  = 'inline-flex items-center justify-center gap-2 text-sm font-medium bg-[#0866ff] text-white hover:bg-[#0866ff]/90 h-10 rounded-md px-5 transition-colors';
    $btnGray  = 'inline-flex items-center justify-center gap-2 text-sm font-medium bg-gray-100 text-gray-700 hover:bg-gray-200 h-10 rounded-md px-4 transition-colors';
    $btnRed   = 'inline-flex items-center justify-center gap-2 text-sm font-medium bg-red-50 text-red-600 hover:bg-red-100 h-9 rounded-md px-3 transition-colors';
@endphp

<main class="flex-1 w-full">
    <div class="p-6 space-y-6">

        {{-- Flash messages (scoped to this tab) --}}
        @if (session('activeTab') === 'leadindustry' && session('success'))
            <div class="rounded-md bg-green-100 p-3 text-green-800 text-sm flex items-center gap-2">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif
        @if ($errors->any() && session('activeTab') === 'leadindustry')
            <div class="rounded-md bg-red-100 p-4 text-red-800">
                <p class="font-semibold text-sm mb-1">Please fix the following:</p>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Add form --}}
        <div class="rounded-lg border bg-white shadow-sm">
            <div class="p-6 border-b">
                <h2 class="text-2xl font-bold text-gray-800">Lead Industries</h2>
                <p class="text-sm text-muted-foreground mt-1">Define the industries your leads come from</p>
            </div>
            <div class="p-6">
                <form method="POST" action="{{ route('lead.industry.store') }}" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="ind-name">Industry Name *</label>
                            <input id="ind-name" name="name" type="text" placeholder="e.g. IT Company" required
                                value="{{ old('name') }}" class="{{ $input }}">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium leading-none" for="ind-notes">Notes</label>
                            <input id="ind-notes" name="notes" type="text" placeholder="Optional description"
                                value="{{ old('notes') }}" class="{{ $input }}">
                        </div>
                    </div>
                    <button type="submit" class="{{ $btnBlue }}">
                        <i class="fa-solid fa-plus"></i> Add Industry
                    </button>
                </form>
            </div>
        </div>

        {{-- Existing list --}}
        <div class="rounded-lg border bg-white shadow-sm">
            <div class="p-6 border-b flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">All Industries</h3>
                    <p class="text-sm text-muted-foreground">{{ $industries->count() }} {{ Str::plural('entry', $industries->count()) }}</p>
                </div>
            </div>

            @if ($industries->isEmpty())
                <div class="p-10 text-center text-muted-foreground text-sm">
                    <i class="fa-solid fa-industry text-3xl mb-3 text-gray-300"></i>
                    <p>No industries added yet. Use the form above to add your first one.</p>
                </div>
            @else
                <div class="divide-y">
                    @foreach ($industries as $industry)
                        <div x-data="{ editing: false }" class="p-4">

                            {{-- View mode --}}
                            <div x-show="!editing" class="flex items-start justify-between gap-4">
                                <div class="flex-1 min-w-0">
                                    <p class="font-medium text-gray-800">{{ $industry->name }}</p>
                                    @if ($industry->notes)
                                        <p class="text-sm text-muted-foreground mt-0.5">{{ $industry->notes }}</p>
                                    @endif
                                </div>
                                <div class="flex items-center gap-2 shrink-0">
                                    <button @click="editing = true" class="{{ $btnGray }}">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit
                                    </button>
                                    <form action="{{ route('lead.industry.destroy', $industry->id) }}" method="POST"
                                        onsubmit="return confirm('Delete \'{{ addslashes($industry->name) }}\'?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="{{ $btnRed }}">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>

                            {{-- Edit mode --}}
                            <form x-show="editing" action="{{ route('lead.industry.update', $industry->id) }}"
                                method="POST" class="space-y-3" x-cloak>
                                @csrf @method('PUT')
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <div class="space-y-1">
                                        <label class="text-xs font-medium text-gray-600">Industry Name *</label>
                                        <input type="text" name="name" value="{{ $industry->name }}" required
                                            class="{{ $input }}">
                                    </div>
                                    <div class="space-y-1">
                                        <label class="text-xs font-medium text-gray-600">Notes</label>
                                        <input type="text" name="notes" value="{{ $industry->notes }}"
                                            class="{{ $input }}">
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button type="submit" class="{{ $btnBlue }}">
                                        <i class="fa-solid fa-check"></i> Save
                                    </button>
                                    <button type="button" @click="editing = false" class="{{ $btnGray }}">
                                        Cancel
                                    </button>
                                </div>
                            </form>

                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</main>
