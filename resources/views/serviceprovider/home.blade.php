@extends('layouts.app')

@section('content')
<div class="md:section-container md:py-6 mt-20">
    <div class="flex md:gap-6">
    <div class="lg:min-w-[384px] lg:mt-0 mt-6">
          <div class="lg:w-96 bg-white rounded-lg z-10">
            <div>
              <!-- <p class="text-sm tracking-[0.1px] mb-3 mt-3 md:mt-0">Other Services</p> -->
              <div
              class="w-full p-4 bg-neutral-10 dark:bg-neutral-900 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-t-md border">
              <!-- Lists --max-h-60-->
              <div
                class="w-full md:w-[360px] flex flex-col py-2 rounded-xl overflow-hidden bg-neutral-10 dark:bg-neutral-900  overflow-y-auto">
                
                


              </div>

            </div>
            </div>
          </div>
        </div>
        <div class="w-full border rounded-xl shadow-md h-fit">
    <div style="opacity: 1;">
        <section aria-describedby="List of Bookings Page">
            <div class="relative select-none">
                <div class="flex justify-between items-center py-4 px-2">
                    <div class="relative inline-block w-64">
                        <select class="w-full p-2 border rounded-md">
                            <option value="ongoing">Sort by: Rating</option>
                            <option value="upcoming">Sort by: Popular</option>
                            <option value="completed">Sort by: Distance</option>
                        </select>
                    </div>
                    <!-- <div class="flex items-center gap-4">
                        <div class="relative inline-block w-64">
                            <input type="text" placeholder="Search by Booking ID" class="w-full p-2 border rounded-md">
                        </div>
                        <div class="relative inline-block w-64">
                            <select class="w-full p-2 border rounded-md">
                                <option value="">Filter by Date</option>
                                <option value="2024-07-07">2024-07-07</option>
                                
                            </select>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="p-2">
                <div class="mx-auto w-full flex flex-col py-4">
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <a id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md" href="{{ route('serviceprovider.serviceproviderdetails') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <a id="book-now-btn"  class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md" href="{{ route('serviceprovider.serviceproviderdetails') }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"     Box="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2 mb-4">
                        <div class="flex justify-between clickable">
                            <div class="flex space-x-3">
                                <div class="w-40 h-28">
                                    <img src="images/tractors/tractor1.jpg" alt="..." class="w-full h-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-medium">Sree Kirishna Farm machines</h2>
                                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">
                                        <div class="flex mt-2 mb-1">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"></path>
                                                <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                            </svg>
                                            <div class="text-sm">
                                                <span class="block">Bachupally, K V Rangareddy District</span>
                                                <span class="block text-xs">Hyderabad - 500090</span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 flex flex-col items-stretch justify-between">
                                <div class="flex justify-center">
                                    <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat similar blocks for more tractors -->

                </div>
            </div>
        </section>
    </div>
</div>

    </div>
</div>
@endsection