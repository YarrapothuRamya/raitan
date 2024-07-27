@extends('layouts.businessapp')



@section('content')


<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="container__inner bg-white rounded-lg shadow-md p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="left__img relative">
                    <img src="/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_details_2x.png&amp;w=3840&amp;q=75" alt="left image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="container__inner__right p-8 bg-white rounded shadow-md">
                    <p class="text-xl font-semibold text-gray-900">Enter your business details</p>
                    <form class="mt-4">
                        <div class="relative mb-6">
                            <input type="text" name="businessName" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                            <label class="label-float bg-white">Business Name</label>
                            <div class="error__message mt-2 hidden text-red-500">Please enter a business name</div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="pincode" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="6" inputmode="numeric" pattern="[0-9]*" required>
                            <label class="label-float bg-white">Pincode</label>
                            <div class="error__message mt-2 hidden text-red-500">Please enter a pincode</div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="block_num" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Block Number / Building Name</label>
                            <div class="error__message mt-2 hidden text-red-500">Please enter block number or building name</div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="street" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Street / Colony Name</label>
                            <div class="error__message mt-2 hidden text-red-500">Please enter street or colony name</div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="area" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                            <label class="label-float bg-white">Area</label>
                            <div class="error__message mt-2 hidden text-red-500">Please select area</div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="landmark" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Landmark</label>
                            <div class="error__message mt-2 hidden text-red-500">Please enter landmark</div>
                        </div>
                        <div class="flex mb-6">
                            <div class="relative flex-1 mr-4">
                                <input type="text" name="city" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                                <label class="label-float bg-white">City</label>
                                <div class="error__message mt-2 hidden text-red-500">Please select city</div>
                            </div>
                            <div class="relative flex-1 ml-4">
                                <input type="text" name="state" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                                <label class="label-float bg-white">State</label>
                                <div class="error__message mt-2 hidden text-red-500">Please select state</div>
                            </div>
                        </div>
                        <a type="submit" class=" fw500 ripple mt-4 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none" href="{{ route('timings.home') }}">Save and Continue</a>
                    </form>
                </div>
            </div>
        </div>
        
       
    
    </div>
  
    @endsection