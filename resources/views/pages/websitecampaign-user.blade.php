@extends('layouts.app')

@section('title', 'Website Campaign User Page')

@section('content')
    <main class="flex-1 w-full bg-gray-50 min-h-screen p-8">

        <!-- Page Header -->
        <div class="max-w-4xl mx-auto mb-10 text-center">
            <h1 class="text-4xl font-bold text-gray-800">Wesbite Campaign User Details</h1>
            <p class="text-gray-500 mt-2">Complete profile information of the user</p>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-md rounded-md p-6 border border-gray-200 max-w-3xl mx-auto">

            <!-- User Header -->
            <div class="flex items-center gap-4 mb-6">
                <div
                    class="h-16 w-16 bg-blue-100 flex items-center justify-center rounded-full text-blue-600 text-3xl font-bold">
                    {{ strtoupper(substr($data->name, 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 capitalize">{{ $data->name }}</h2>
                    <p class="text-gray-500">Registered on {{ $data->created_at->format('d M Y') }}</p>
                </div>
            </div>

            <!-- Details Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Name -->
                <div class="flex flex-col">
                    <label class="text-gray-500 text-sm">Full Name</label>
                    <p class="text-gray-800 font-medium capitalize">{{ $data->name }}</p>
                </div>

                <!-- Phone -->
                <div class="flex flex-col">
                    <label class="text-gray-500 text-sm">Phone Number</label>
                    <p class=" text-gray-800">{{ $data->phone }}</p>
                </div>

                <!-- Email -->
                <div class="flex flex-col">
                    <label class="text-gray-500 text-sm">Email Address</label>
                    <p class=" text-gray-800">{{ $data->email }}</p>
                </div>

                <!-- Date -->
                <div class="flex flex-col">
                    <label class="text-gray-500 text-sm">Created Date</label>
                    <p class=" text-gray-800">{{ $data->created_at->format('d M Y') }}</p>
                </div>

            </div>

            <!-- Message Section -->
            <div class="mt-8">
                <label class="text-gray-500 text-sm">Message</label>
                <div class="mt-2 p-4 bg-gray-50 rounded-lg border border-gray-200 text-gray-700 leading-relaxed">
                    {{ $data->message ?? 'No message provided.' }}
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-10">
                <a href="{{ url()->previous() }}"
                    class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    ← Back to List
                </a>
            </div>
        </div>

    </main>
@endsection
