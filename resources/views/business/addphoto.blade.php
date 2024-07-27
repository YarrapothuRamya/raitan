@extends('layouts.businessapp')

@section('content')
<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-md rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-bold text-gray-800">Photo Gallery</span>
        <span class="text-sm text-gray-500 flex items-center space-x-2">
            <span class="gridviewBx">
                <i class="rearrange-icn text-gray-600 text-xl"></i>
            </span>
        </span>
    </header>

    <!-- Button Section -->
    <div class="fixed bottom-0 left-0 right-0 bg-white p-4 shadow-lg">
        <div class="flex justify-center">
            <button class="font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                Save and Continue
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
        <!-- Service Info -->
        <div class="mb-6 flex items-start space-x-4">
            <div class="infoIcnbx">
                <i class="infoicn text-blue-600 text-2xl"></i>
            </div>
            <div class="text-sm text-gray-700">
                <p>Make your business look more trustworthy by uploading photos and videos of your business premises.</p>
                <p class="mt-2">Please note that any uploaded photos or videos may go for audit and take up to 2 working days before it goes live.</p>
                <p class="mt-2">Recommended Size: <span class="font-semibold">1000 px X 1000 px</span></p>
            </div>
        </div>

        <!-- File Upload -->
        <div class="mt-8">
            <label class="block bg-gray-100 p-4 rounded-lg shadow-md cursor-pointer hover:bg-gray-200 transition duration-300">
                <span class="block text-blue-600 text-lg font-medium">Upload Photos of Business Premises</span>
                <input type="file" multiple accept="image/*" class="hidden">
                <span class="block text-sm text-gray-600 mt-2">Recommended Size: <span class="font-semibold">1000 px X 1000 px</span></span>
            </label>
        </div>

        <!-- Image List -->
        <div class="mt-6">
            <ul class="list-none">
                <!-- List items go here -->
            </ul>
        </div>
    </div>
</div>

@endsection