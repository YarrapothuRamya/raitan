@extends('layouts.app')

@section('content')



<nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; margin-left: 5rem; position: absolute">
  <ol class="list-reset flex">
    <li>
      <a
        href="#"
        class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
        >Home</a
      >
    </li>
    <li>
      <span class="mx-2 text-neutral-400">></span>
    </li>
    <li>
      <a
        href="#"
        class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
        >Implementors</a
      >
    </li>
    <li>
      <span class="mx-2 text-neutral-400">></span>
    </li>
    <li class="text-neutral-400">Product Details</li>
  </ol>
</nav>

<section class=" home_appextra " aria-describedby="Cars list Page" style="padding-top: 140px;">
    <div class="section-container" style="opacity: 1;">
        <section aria-describedby="Book car Page" class="mb-20 section-container">

            <div class="max-w-5xl mx-auto border rounded-lg shadow-sm ">
                <div class="sm:px-6 px-4 py-4 lg:px-2">
                    <div class="flex">
                        <div class="w-40 h-28">
                            <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..."
                                    class="w-40 h-28" width="160" height="112"></div>
                        </div>
                        <div class="ml-10">
                            <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                            <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span
                                    class="text-sm">Manual, Desiel</span></div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="px-6 ">
                        <div class="text-xs mt-4 text-gray-500">
                            <div class=" flex items-center ">
                                <p>Includes 80 kms without fuel</p><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 16 16" role="button" class="text-pistachio ml-2"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                                    </path>
                                </svg>
                            </div>
                            <p class="mt-2">Extra Kms @ 9/km</p>

                        </div>
                        <div class="flex mt-6">
                            <div class="w-full border-l border-y py-2 px-4 rounded-l-lg">
                                <div class="flex justify-between items-center">
                                    <h4 class="font-medium">Location</h4><a
                                        class="text-sm text-pistachio growing-link">Change</a>
                                </div>
                                <div class="flex mt-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio" height="24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"
                                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                                        </path>
                                        <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32"></circle>
                                    </svg>
                                    <div class="text-sm"><span class="block">Bachupally, K V Rangareddy District
                                        </span><span class="block">Hyderabad - 500090</span></div>
                                </div>
                            </div>
                            <div class="border my-2"></div>

                        </div>
                        <!-- <div class="border rounded-lg mt-6 px-4 py-2 animate-fade-in">
                                <h4 class="font-medium mb-2">Price Details</h4>
                                <div class="px-3">
                                    <div>
                                        <div class="flex justify-between text-sm text-gray-600 my-1">
                                            <div class="flex items-center"><span>Base Fare</span><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 16 16"
                                                    class=" text-pistachio ml-2 cursor-pointer smooth-animate "
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg></div>
                                            <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                    </path>
                                                </svg><span>960</span></div>
                                        </div>
                                        <div class="text-xs ml-5 text-gray-500" style="height: 0px; opacity: 0;">For 0
                                            Day 8 Hours 0 Min</div>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-600 my-1">
                                        <div class="flex items-center"><span>Delivery Charge</span></div>
                                        <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                </path>
                                            </svg><span>0</span></div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm text-gray-600 my-1">
                                            <div class="flex items-center"><span>Tax</span><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                                    class=" text-pistachio ml-2 cursor-pointer smooth-animate "
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg></div>
                                            <div class="flex space-x-1 items-center"><svg stroke="currentColor"
                                                    fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                                    </path>
                                                </svg><span>268</span></div>
                                        </div>
                                        <div class="text-xs ml-5 text-gray-500" style="height: 0px; opacity: 0;">Tax @
                                            28%</div>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="px-3">
                                    <div class="flex justify-between text-sm text-gray-600 my-1 font-medium">
                                        <div class="flex items-center"><span>Total Amount</span></div><span>₹
                                            1228</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-red-500 my-1">
                                        <div class="flex items-center"><span>Refundable Deposit</span>
                                            <div class="relative"><svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 1024 1024"
                                                    class="text-red-500 ml-2 z-10" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                                    </path>
                                                    <path
                                                        d="M464 688a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm24-112h48c4.4 0 8-3.6 8-8V296c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8z">
                                                    </path>
                                                </svg></div>
                                        </div><span>₹ 5000</span>
                                    </div>
                                </div>
                            </div> -->
                        <div class="border rounded-lg mt-6 sm:px-4 px-2 py-2 sm:shadow-none shadow-md">
                            <h4 class="font-medium mb-4">Things good to know</h4>
                            <div class="relative select-none">
                                <div
                                    class=" flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative gap-3 sm:snap-none snap-x">
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            24*7
                                            Assistance</p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Well Maintained &amp; Serviced </p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Wide
                                            Range </p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Pick &amp; Drop
                                            Anywhere</p>

                                    </div>
                                </div>
                            </div>
                            <div class="px-2 mt-4 text-sm text-gray-500 flex flex-col gap-1"><a rel="noreferrer"
                                    class="growing-link w-fit" target="_blank" href="/terms-and-conditions/">Terms
                                    &amp; Conditions</a><a rel="noreferrer" class="growing-link w-fit" target="_blank"
                                    href="/fuel-policy/">Fuel Policy</a><a rel="noreferrer" class="growing-link w-fit"
                                    target="_blank" href="/cancellation-terms/">Cancellation Policy</a></div>
                        </div>
                    </div>
                </div>
                <div
                    class="shadow-t-lg sm:rounded-xl rounded-t-3xl pb-4 pt-2 sm:px-6 lg:px-2 px-2 sm:mt-4 sm:sticky fixed bottom-0 left-0 right-0 bg-white">
                    <div class="min-h-[25px] text-sm text-center"></div>
                    <div class="flex sm:flex-row flex-col sm:px-6 px-2 sm:justify-between sm:items-center">
                        <div class="sm:block flex space-x-2 justify-between items-center">
                            <!-- <div>
                                <div class="flex space-x-2">
                                    <div class=" flex font-medium text-lg items-center"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                                            </path>
                                        </svg><span>6,228</span></div>
                                </div><span class="text-xs text-gray-500">for 80 kms without fuel</span>
                            </div> -->
                        </div>
                        <div class="sm:mt-0">
                            <!-- <div>
                                <div role="button" class="items-center flex text-sm text-red-600">

                                    <p class="ml-1">Apply coupon</p>
                                </div>
                            </div> -->
                            <button id="checkout-proceed-to-pay"
                                class="proceed-to-pay action-btn sm:inline-block block sm:w-auto w-full sm:py-2 py-3 px-4 rounded-xl text-sm whitespace-nowrap"><span>Call
                                    Now</span></button>
                        </div>
                    </div><button id="booking-success" style="display: none;"></button>
                </div>
            </div>
        </section>
    </div>
</section>




@endsection