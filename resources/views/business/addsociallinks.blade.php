@extends('layouts.businessapp')

@section('content')
<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-lg rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-semibold text-gray-800">Add Social Media Links</span>
        <span class="text-sm text-gray-500"></span>
    </header>

    <!-- Social Media Links Section -->
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
        <!-- Info Section -->
        <div class="pl-5 pr-5 mb-10">
            <div class="flex items-start space-x-4 mb-4">
                <div class="text-blue-500 text-2xl">
                    <i class="infoicn"></i>
                </div>
                <div class="text-gray-700 text-sm">
                    <p>Add social media links in the business profile to maximize audience involvement.</p>
                </div>
            </div>
        </div>

        <!-- Social Media Links Form -->
        <div class="space-y-6">
            <!-- Facebook Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="Facebook Business Page Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-facebook-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another Facebook Business Page Link</button>

            <!-- X Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="X Business Account Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-twitter-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another X Business Account Link</button>

            <!-- LinkedIn Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="LinkedIn Company Page Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-linkedin-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another LinkedIn Company Page Link</button>

            <!-- YouTube Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="YouTube Channel Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-youtube-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another YouTube Channel Link</button>

            <!-- Instagram Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="Instagram Profile Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-instagram-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another Instagram Profile Link</button>

            <!-- Other Platform Link -->
            <div class="flex items-center space-x-4 mb-4">
                <input type="text" class="border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500 w-full" placeholder="Other Platform Link">
                <span class="ml-2 text-gray-500 text-2xl">
                    <i class="e-other-icn"></i>
                </span>
            </div>
            <button class="text-blue-500 text-sm font-semibold">+ Add Another Other Platform Link</button>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end mt-6">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save</button>
        </div>
    </div>
</div>
@endsection
