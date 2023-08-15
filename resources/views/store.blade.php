@extends('layouts.app')

@section('content')
    <x-navbar />

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Store Details</h2>
            
            <div class="mb-4">
                <label for="store_title" class="block text-gray-700 text-sm font-bold mb-2">Store Title</label>
                <p id="store_title" class="text-sm">{{ $store->title }}</p>
            </div>
            
            <div class="mb-4">
                <label for="store_owner" class="block text-gray-700 text-sm font-bold mb-2">Store Owner</label>
                <p id="store_owner" class="text-sm">{{ $store->user->first_name . " " . $store->user->last_name }}</p>
            </div>
            
            <div class="mb-4">
                <label for="store_description" class="block text-gray-700 text-sm font-bold mb-2">Store Description</label>
                <p id="store_description" class="text-sm">{{ $store->description }}</p>
            </div>
        </div>
    </section>
@endsection
